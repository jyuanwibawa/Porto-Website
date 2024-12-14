<?php namespace App\Controllers;



class Page extends BaseController

{
    public function login()

	{

		echo view("login");

	}
	public function home_page()

	{

		echo view("home_page");

	}

	public function signup()

	{

		echo view("signup");

	}

	public function menu()

	{

		echo view("menu");

	}
	public function keranjang()

	{

		echo view("keranjang");

	}
	public function profile()

	{

		echo view("profile");

	}

	public function edit_profile()

	{

		echo view("edit_profile");

	}


    public function order_info()

	{

		echo view("order_info");

	}

     public function about()

	{

		echo view("about");

	}


   


}
