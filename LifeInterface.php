<?php 

/*
This is a typical life cycle , birth, grow,die.
All classes that use this interface will have,
to have these methods for default.
*/

interface LifeInterface
{
	public function birth();

	public function grow();
	
	/* die is a T_EXIT php parameter, it's not possible rewrite, in this
	i use death.
	*/
	public function death();
	
}