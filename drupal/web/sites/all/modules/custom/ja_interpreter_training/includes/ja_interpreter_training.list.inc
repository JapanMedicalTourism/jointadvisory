<?php  
	function ja_interpreter_training_list($form, &$form_state){
		$submissions = _get_submissions(true);

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

		$form['select_filters'] = array(
			'#type' => 'fieldset',
			'#title' => t('Select Filter'),
			'#theme' => 'exposed_filters__user',
			'#attributes' => array('class' => array('container-inline')), 
		);

		$form['select_filters']['payment_method'] = array(
          	'#type' => 'select',
		  	'#title' => t('Payment Method'),
          	'#options' => array(
          		'all' => 'All',
          		'paypal' => 'Paypal',
          		'bank_transfer' => 'Bank Transfer',
          	),
          	'#default_value' => (isset($_SESSION['ja_training_registration_payment_method']) ? $_SESSION['ja_training_registration_payment_method'] : ''),
          	'#attributes' => array(
          		'style' => 'width: 145px;'
          	)
        );

        $form['select_filters']['status'] = array(
          	'#type' => 'select',
		  	'#title' => t('Status'),
          	'#options' => array(
          		'all' => 'All',
          		'pending' => 'Pending',
				'completed' => 'Complete',
				'archived' => 'Archived',
				'refunded' => 'Refunded',
          	),
          	'#default_value' => (isset($_SESSION['ja_training_registration_status']) ? $_SESSION['ja_training_registration_status'] : ''),
          	'#attributes' => array(
          		'style' => 'width: 145px;'
          	)
        );

        $form['select_filters']['submit_select_filter'] = array(
	        '#type' => 'submit',
	        '#value' => t('Filter'),
	    );

	    $form['select_filters']['submit_select_clear'] = array(
	        '#type' => 'submit',
	        '#value' => t('Clear'),
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

	function ja_interpreter_training_list_submit($form, &$form_state){
		$op = $form_state['input']['op'];
	    switch ($op) {
	    	case t('Filter'):
				$_SESSION['ja_training_registration_payment_method'] = $form_state['values']['payment_method'];
				$_SESSION['ja_training_registration_status'] = $form_state['values']['status'];

			break;
			case t('Clear'):
				unset($_SESSION['ja_training_registration_payment_method']);
				unset($_SESSION['ja_training_registration_status']);
		}
	}

	function ja_interpreter_training_view($form, &$form_state, $id){
		$registration = db_select('ja_training_registration', 'jtr')
			->fields('jtr')
			->condition('id', $id)
			->execute()
			->fetchAssoc();

		$form['back'] = array(
			'#type' => 'item',
			'#title' => t('<p align="left"><a href="'.url('admin/config/codmancommunications-interpreter-training-application-form').'">Back to Listings</a></p>'),
			'#markup' => '',
		);	

		$form['registration_id'] = array(
			'#type' => 'hidden',
			'#default_value' => $id,
		);

		$form['first_name'] = array(
			'#type' => 'textfield',
			'#title' => 'FIrst Name',
			'#required' => true,
			'#default_value' => $registration['first_name'],
		);

		$form['last_name'] = array(
			'#type' => 'textfield',
			'#title' => 'Last Name',
			'#required' => true,
			'#default_value' => $registration['last_name'],
		);

		$form['email'] = array(
			'#type' => 'textfield',
			'#title' => 'Email Address',
			'#required' => true,
			'#default_value' => $registration['email'],
		);

		$form['contact'] = array(
			'#type' => 'textfield',
			'#title' => 'Contact',
			'#required' => true,
			'#default_value' => $registration['contact'],
		);

		$form['address'] = array(
			'#type' => 'textfield',
			'#title' => 'Address',
			'#required' => true,
			'#default_value' => $registration['address'],
		);

		$form['reason'] = array(
			'#type' => 'textarea',
			'#title' => 'Reason',
			'#required' => true,
			'#default_value' => $registration['reason'],
		);

		$form['interpreter'] = array(
			'#type' => 'select',
			'#title' => 'Will work as an interpreter?',
			'#required' => true,
			'#options' => array(
				1 => 'Yes',
				0 => 'No',
			),
			'#default_value' => $registration['interpreter'],
		);

		$form['payment_method2'] = array(
			'#type' => 'select',
			'#title' => 'Payment Method',
			'#options' => array(
				'paypal' => 'Paypal',
				'bank_transfer' => 'Bank Transfer',
			),
			'#default_value' => $registration['payment_method'],
			'#attributes' => array(
          		'disabled' => 'disabled',
          	),
		);

		$form['payment_method'] = array(
			'#type' => 'hidden',
			'#required' => true,
			'#default_value' => $registration['payment_method'],
		);

		$form['participation_type'] = array(
			'#type' => 'select',
			'#title' => 'Participation Type',
			'#required' => true,
			'#options' => array(
				'listening' => 'Listening',
				'participating' => 'Participating',
			),
			'#default_value' => $registration['participation_type'],
		);

		$form['status'] = array(
			'#type' => 'select',
			'#title' => 'Status',
			'#required' => true,
			'#options' => array(
				'pending' => 'Pending',
				'completed' => 'Completed',
				'archived' => 'Archived',
				'refunded' => 'Refunded',
			),
			'#default_value' => $registration['status'],
		);

		$topics = db_select('ja_training_lineitems', 'jtl')
			->fields('jtl')
			->condition('registration_id', $id)
			->execute()
			->fetchAll();

		$options = array();
		foreach ($topics as $topic) {
			$options[$topic->id] = array(
				'title' => $topic->title,
			);
		}

		$header = array(
		    'title' => array('data' => t('Topic')),
		);

		$form['topics'] = array(
			'#theme' => 'table',
		    '#header' => $header,
		    '#rows' => $options,
		    '#empty' => t('No data available.'),
		);

		$form['submit'] = array(
			'#type' => 'submit',
			'#value' => 'Save',
		);

		return $form;
	}

	function ja_interpreter_training_view_submit($form, &$form_state){
		if($form_state['values']['payment_method'] == 'bank_transfer' && $form_state['values']['status'] == 'completed'){
			_send_confirmation_email($form_state['values']['registration_id']);
		}

		$update = db_update('ja_training_registration')
			->fields(array(
				'first_name' => $form_state['values']['first_name'],
				'last_name' => $form_state['values']['last_name'],
				'email' => $form_state['values']['email'],
				'contact' => $form_state['values']['contact'],
				'address' => $form_state['values']['address'],
				'reason' => $form_state['values']['reason'],
				'interpreter' => $form_state['values']['interpreter'],
				'payment_method' => $form_state['values']['payment_method'],
				'participation_type' => $form_state['values']['participation_type'],
				'status' => $form_state['values']['status'],
				'modified' => date('Y-m-d H:i:s'),
			))->condition('id', $form_state['values']['registration_id'])
			->execute();

		drupal_set_message('Successfully updated data');
	}

	function _get_submissions($paged = false){
		$query = db_select('ja_training_registration', 'jtr');

		if($paged){
			$query = $query->extend('PagerDefault')->extend('TableSort');
		}
		
		$query = $query->fields('jtr');

		if(isset($_SESSION['ja_training_registration_payment_method']) && $_SESSION['ja_training_registration_payment_method'] != 'all'){
			$query = $query->condition('payment_method', $_SESSION['ja_training_registration_payment_method']);
		}

		if(isset($_SESSION['ja_training_registration_status']) && $_SESSION['ja_training_registration_status'] != 'all'){
			$query = $query->condition('status', $_SESSION['ja_training_registration_status']);
		}

		if($paged){
			$query = $query->limit(50);
		}
			
		$submissions = $query->orderBy('created', 'DESC')
			->execute()
			->fetchAll();

		return $submissions;
	}
?>