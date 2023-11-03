<?php
include_once('./_common.php');

$sb_menus = [
  [
    'id' => 'introduction',
    'name' => 'About Us',
    'link' => '/eng/sub/greetings',
    'sb_2menus' => [
      [
        'id' => 'greeting',
        'name' => 'Greetings',
        'link' => '/eng/sub/greetings'
      ],
      [
        'id' => 'setup',
        'name' => 'Vision',
        'link' => '/eng/sub/vision'
      ],
      [
        'id' => 'overview',
        'name' => 'Introduction',
        'link' => '/eng/sub/introduction'
      ],
      [
        'id' => 'schedule',
        'name' => 'Milestone',
        'link' => '/eng/sub/milestone'
      ]
    ]
  ],
  [
    'id' => 'ismr',
    'name' => 'i-SMR',
    'link' => '/eng/sub/innovation',
    'sb_2menus' => [
      [
        'id' => 'innovation',
        'name' => 'Innovative Design',
        'link' => '/eng/sub/innovation'
      ],
      [
        'id' => 'technology',
        'name' => 'Innovative Technology',
        'link' => '/eng/sub/technology'
      ],
      [
        'id' => 'differentiation',
        'name' => 'Uniqueness',
        'link' => '/eng/sub/uniqueness'
      ]
    ]
  ],
  [
    'id' => 'community',
    'name' => 'Contact Us',
    'link' => '/contact_eng',
    'sb_2menus' => [
      [
        'id' => 'inquiry',
        'name' => 'Contact Us',
        'link' => '/contact_eng'
      ]
    ]
  ]
];

//제품 카테고리 DB 데이터 가져오기 + 메뉴 배열에 할당
/* 필요시 주석 해제
$cate_table = G5_TABLE_PREFIX.'shop_category';
$prd_table = G5_TABLE_PREFIX.'shop_item';
$prd_cate_sql = " select ca_id, ca_1_subj from {$cate_table} ";
$prd_cate_result = sql_query($prd_cate_sql);
$prd_cate = array();
for($i=0; $prd_cate_row=sql_fetch_array($prd_cate_result); $i++){
  $sb_menus[1]['sb_2menus'][] = [
    'id' => $prd_cate_row['ca_id'],
    'name' => $prd_cate_row['ca_1_subj'],
    'link' => '/eng/sub/prod_list/'.$prd_cate_row['ca_id'],
  ];

  $prd_item_sql = " select it_id, it_name from {$prd_table} where ca_id = '{$prd_cate_row['ca_id']}' and it_use=1 ";
  $prd_item_result = sql_query($prd_item_sql);
  $prd_item = array();
  for($k=0; $prd_item_row=sql_fetch_array($prd_item_result); $k++){
    $sb_menus[1]['sb_2menus'][$i]['sb_3menus'][] = [
      'id' => $prd_item_row['it_id'],
      'name' => $prd_item_row['it_name'],
      'link' => '/eng/sub/prod_view/'.$prd_item_row['it_id'],
    ];
  }
}
*/
?>