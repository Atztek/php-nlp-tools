<?php

namespace NlpTools;

/*
 * A TrainingDocument is a document that "decorates" any other document
 * to add the real class of the document. It is used while training
 * together with the training set.
 */
class TrainingDocument implements Document
{
	protected $d;
	protected $class;
	
	public function __construct($class, Document $d) {
		$this->d = $d;
		$this->class = $class;
	}
	public function getDocumentData() {
		return $this->d->getDocumentData();
	}
	public function getClass() {
		return $this->class;
	}
}

?>
