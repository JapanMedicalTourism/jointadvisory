<?php  
	function ja_interpreter_training_list($form, &$form_state){
		$query = db_select('ja_training_registration', 'jtr');
		$query = $query->extend('PagerDefault')->extend('TableSort');
		$submissions = $query->fields('jtr')
			->limit(50)
			->orderBy('created', 'DESC')
			->execute()
			->fetchAll();

		$options = array();
		foreach ($submissions as $submission) {
			$options[$submission->id] = array(
				'first_name' => $submission->first_name,
				'last_name' => $submission->last_name,
				'email' => $submission->email,
				'contact' => $submission->contact,
				'address' => $submission->address,
				'interpreter' => ($submission->interpreter ? 'Yes' : 'No'),
				'payment_method' => ($submission->payment_method == 'paypal' ? 'Paypal' : 'Bank Transfer'),
				'participation_type' => ucfirst($submission->participation_type),
				'status' =>ucfirst($submission->status),
				'created' => $submission->created,
				'modified' => $submission->modified,
				'actions' =>  theme('links', array(
				  	'links' => array(
						'item1' => array('title' => t("View/Edit"), 'href' => "admin/config/codmancommunications-interpreter-training-application-form/$submission->id"),
					),
				  	'attributes' => array('class' => array('links', 'inline')))
				),
			);
		}

		$header = array(
			'first_name' => array('data' => t('First Name')),
			'last_name' => array('data' => t('Last Name')),
			'email' => array('data' => t('Email Address')),
			'contact' => array('data' => t('Contact')),
			'address' => array('data' => t('Address')),
			'interpreter' => array('data' => t('Will work as an interpreter?')),
			'payment_method' => array('data' => t('Payment Method')),
			'participation_type' => array('data' => t('Participaion Type')),
			'status' => array('data' => t('Status')),
			'created' => array('data' => t('Created')),
			'modified' => array('data' => t('Modified')),
			'actions' => array('data' => t('Actions')),
		);

		$form['submissions'] = array(
			'#type' => 'tableselect',
		    '#header' => $header,
		    '#options' => $options,
		    '#empty' => t('No submissions found.'),
		);

		$form['pager'] = array('#markup' => theme('pager', array('tags' => array(), 'element' => 0)));
		return $form;
	}
?>