<?php

include ('LifeInterface.php');

/* this is a basic use cae of this example.
Humans need those life methods in your life cycle.
And have proper methods in your life cycle.
*/

class Human implements LifeInterface
{
	public function birth()
	{

	}

	public function grow()
	{

	}

	public function death()
	{

	}

	/*
	Humans need work :(
	(this rule is not true for dwarfs)
	*/
	public function work()
	{

	}

	/*
	Humans need marry :(
	........... :(
	*/
	public function marry()
	{

	}
}