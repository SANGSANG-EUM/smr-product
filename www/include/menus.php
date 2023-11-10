<?php
include_once('./_common.php');

$sb_menus = [
  [
    'id' => 'ismr',
    'name' => 'i-SMR',
    'link' => '/sub/overview',
    'sb_2menus' => [
      [
        'id' => 'overview',
        'name' => 'Overview',
        'link' => '/sub/overview'
      ],
      [
        'id' => 'explorer',
        'name' => 'SMR explorer',
        'link' => "javascript:alert('Coming soon.');"
      ],
      [
        'id' => 'vision',
        'name' => 'SMR vision',
        'link' => '/sub/vision'
      ],
      [
        'id' => 'features',
        'name' => 'Features',
        'link' => '/sub/features'
      ]
    ]
  ],
  [
    'id' => 'aboutus',
    'name' => 'About us',
    'link' => '/sub/partners',
    'sb_2menus' => [
      [
        'id' => 'partners',
        'name' => 'Partners',
        'link' => '/sub/partners'
      ],
      [
        'id' => 'energy',
        'name' => 'K-energy',
        'link' => '/sub/energy'
      ],
      [
        'id' => 'history',
        'name' => 'History',
        'link' => '/sub/history'
      ]
    ]
  ],
  [
    'id' => 'resources',
    'name' => 'Resources',
    'link' => '/sub/videos',
    'sb_2menus' => [
      [
        'id' => 'videos',
        'name' => 'Videos',
        'link' => '/video'
      ],
      [
        'id' => 'faq',
        'name' => 'Factsheets',
        'link' => "javascript:alert('Coming soon.');"
      ],
      [
        'id' => 'research',
        'name' => 'Research',
        'link' => "javascript:alert('Coming soon.');"
      ],
      [
        'id' => 'news',
        'name' => 'News',
        'link' => '/news'
      ]
    ]
  ],
  [
    'id' => 'contact',
    'name' => 'Contact',
    'link' => '/contact',
    // 'sb_2menus' => [
    //   [
    //     'id' => 'contact2',
    //     'name' => 'Contact',
    //     'link' => '/contact'
    //   ]
    // ]
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
    'link' => '/sub/prod_list/'.$prd_cate_row['ca_id'],
  ];

  $prd_item_sql = " select it_id, it_name from {$prd_table} where ca_id = '{$prd_cate_row['ca_id']}' and it_use=1 ";
  $prd_item_result = sql_query($prd_item_sql);
  $prd_item = array();
  for($k=0; $prd_item_row=sql_fetch_array($prd_item_result); $k++){
    $sb_menus[1]['sb_2menus'][$i]['sb_3menus'][] = [
      'id' => $prd_item_row['it_id'],
      'name' => $prd_item_row['it_name'],
      'link' => '/sub/prod_view/'.$prd_item_row['it_id'],
    ];
  }
}
*/
?>