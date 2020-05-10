<?php 
/*********Created By Ram Gour*********************/

namespace Ram\Comm\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Demo extends Command
{
	
	protected function configure(){
		$this->setName('ram:demo')
		->setDescription('Test Description Here');
	}
	public function execute(InputInterface $input, OutputInterface $output){
		$output->writeln('Test text Here');
	}
}
?>