<?php

// CakeEmail の場所を指定
App::uses('CakeEmail', 'Network/Email');

class ContactsController extends AppController {
    
    public $uses = 'Contact';
    public $components = ['Session'];

    public function beforeFilter() {
        $this->layout = 'basic';
        $this->Auth->allow('contact', 'confirm', 'complete');
    }

    public function contact() {
        if ($this->request->is('post', 'put')) {
            $this->Contact->set($this->request->data);
            
            if(!$this->Contact->validates()){
               return;
            } 
            // TODO: フォームの内容をセッションに保存
            $this->Session->write('data', $this->request->data);
            // リダイレクト
            $this->redirect(array('action' => 'confirm'));                
        }
        // もしセッションに値がセットされていたら読み込む。修正用。
        $this->request->data = $this->Session->read('data');
        // ページ遷移時セッションをクリア
        $this->Session->delete('data');
    }

    public function confirm() {
        // セッションからフォームの内容を読み込み
        $data = $this->Session->read('data');
        $this->set('data', $data);

        //「送信する」が押されたとき
        if (isset($this->params['data']['send'])) {
            //セッションの情報を取得
            $content = ['name' => $data['Contact']['name'],
                        'email' => $data['Contact']['email'],
                        'body' => $data['Contact']['body']];
            // ここでメール送信
            $Email = new CakeEmail('gmail');
            // 管理者用
            $Email->from(array('example@gmail.com' => 'SiteBase'))
                    ->to('example@gmail.com')
                    ->subject('SiteBase経由のお問い合わせ')
                    ->viewVars($content)
                    ->template('contact', 'contact')
                    ->emailFormat('text')
                    ->config('gmail')
                    ->send();
            // 利用者用
            $Email->from(array('example@gmail.com' => 'SiteBase'))
                    ->to($content['email'])
                    ->subject('SiteBase | お問い合わせありがとうございました')
                    ->viewVars($content)
                    ->template('contact_fw', 'contact_fw')
                    ->emailFormat('text')
                    ->config('gmail')
                    ->send();
            // セッションをクリア
            $this->Session->delete('data');
            // リダイレクト
            return $this->redirect(array('action' => 'complete'));
            // $this->Flash->success('送信できました');
        //「戻る」が押されたとき
        } elseif (isset($this->params['data']['back'])) {
            return $this->redirect(array('action' => 'contact'));
        }
    }
    
    public function complete() {
        
    }

}
