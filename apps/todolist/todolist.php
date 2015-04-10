<?php
require_once('includes/cmsApplications.php');
class TodolistApplication extends CmsApplications{
	function addtodotask(){
		echo 'this will add new tasks to todolist in database';
	}

	function viewtodolist(){
		echo 'this wil show all to do task from database';
	}

	function display(){
		$this->displayDashboard();
	}

	private function displayDashboard(){
		?>
		<div>
			<h3>Todolist Application Dashboard</h3>
			<a href="index.php?app=todolist&task=addtaskform">Add Todo Task</a>
			<br />
			<a href="#">View Todo List</a>
		</div>
		<?php
	}

	function addtaskform(){
		?>
		<div>
			<h3>Todolist Application Dashboard</h3>
			<form>
				<input type="hidden" name="app" value="todolist" />
				<input type="hidden" name="task" value="addtodotask" />

				<label for="title">Title</label>
				<input type="text" name="title" />
				<br />
				<label for="desc">Descriptions</label>
				<textarea name="desc"></textarea>
				<input type="submit" value="Add Task" />
			</form>
		</div>

		<?php
	}
}
?>