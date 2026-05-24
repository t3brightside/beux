<?php
  $EM_CONF[$_EXTKEY] = [
    'title' => 'BEUX',
    'description' => 'Back End UX thing',
    'category' => 'fe',
    'version' => '0.3.0',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Tanel Põld',
    'author_email' => 'tanel@brightside.ee',
    'author_company' => 'Brightside OÜ',
    'constraints' => [
      'depends' => [
        'typo3' => '14.0.0-14.99.99',
      ],
    ],
  ];
