<?php
namespace App\Support;
use IteratorAggregate, ArrayIterator;
 class Collection implements IteratorAggregate{
protected $items=[];

	 public function set($items)
	 {
		 $this->items = $items;
	}
	 public function get()
	 {
		return $this->items;
}

	 public function count()
	 {
		 return count($this->items);
}

	 public function getIterator()
	 {
		 return new ArrayIterator($this->items);
}

	 public function merge(Collection $collection)
	 {
		 return $this->items = array_merge($this->get(),$collection->get());
}

	 public function toJson()
	 {
		 return json_encode($this->items);
}
 }