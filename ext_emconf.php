<?php
  $EM_CONF[$_EXTKEY] = [
    'title' => 'BEUX',
    'description' => 'Back End UX thing',
    'category' => 'fe',
    'version' => '0.1.1',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Tanel Põld',
    'author_email' => 'tanel@brightside.ee',
    'author_company' => 'Brightside OÜ',
    'constraints' => [
      'depends' => [
        'typo3' => '12.1.0-12.99.99',
      ],
    ],
  ];
