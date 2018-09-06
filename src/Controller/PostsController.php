<?php
namespace App\Controller;
use App\Controller\AppController;


class PostsController extends AppController{

	public function index(){

		$posts = $this->Posts->find('all');

		$this->set('posts', $posts);



	}

	public function add(){

		
		$post = $this->Posts->newEntity();

		if($this->request->is('post')){

			$post = $this->Posts->patchEntity($post, $this->request->data());
				if($this->Posts->save($post)){
					$this->Flash->success("The post inserted successfylly", ['key' => 'message']);
					return $this->redirect(['action' => 'index']);


				}
				$this->Flash->error('cannot insert post!');
		}
		$this->set('post', $post);
	}


	public function view($id = Null){

		$post = $this->Posts->get($id);
		$this->set('post', $post);

	}



	public function edit($id = Null){

		$post = $this->Posts->get($id);

		if($this->request->is('post', 'put')){

			$this->Posts->patchEntity($post, $this->request->data());
			if($this->Posts->save($post)){

				$this->Flash->success('The post changed!', ['key' => 'message']);
				$this->redirect(['action' => 'index']);
			}
			$this->Flash->error('Canot update post', ['key' => 'message']);


		}$this->set('post', $post);


	}

	public function delete($id = Null){

		$this->request->allowMethod(['get', 'delete']);

		$post = $this->Posts->get($id);
		if($this->Posts->delete($post)){

			$this->Flash->success('Post deleted succesfully' , ['key' => 'message']);
			return $this->redirect(['action' => 'index']);



		}



	}


}
?>