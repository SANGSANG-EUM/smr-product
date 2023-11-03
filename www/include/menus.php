<?php
include_once('./_common.php');

$sb_menus = [
  [
    'id' => 'business',
    'name' => '사업안내',
    'link' => '/sub/overview',
    'sb_2menus' => [
      [
        'id' => 'overview',
        'name' => '사업개요',
        'link' => '/sub/overview'
      ],
      [
        'id' => 'schedule',
        'name' => '사업추진일정',
        'link' => '/sub/schedule'
      ]
    ]
  ],
  [
    'id' => 'introduction',
    'name' => '사업단 소개',
    'link' => '/sub/greeting',
    'sb_2menus' => [
      [
        'id' => 'greeting',
        'name' => '인사말',
        'link' => '/sub/greeting'
      ],
      [
        'id' => 'setup',
        'name' => '설립목적',
        'link' => '/sub/setup'
      ],
      [
        'id' => 'organization',
        'name' => '조직도',
        'link' => '/sub/organization'
      ],
      [
        'id' => 'ci',
        'name' => 'CI소개',
        'link' => '/sub/ci'
      ],
      [
        'id' => 'map',
        'name' => '오시는 길',
        'link' => '/sub/map'
      ]
    ]
  ],
  [
    'id' => 'ismr',
    'name' => 'i-SMR',
    'link' => '/sub/smr',
    'sb_2menus' => [
      [
        'id' => 'smr',
        'name' => 'SMR개요',
        'link' => '/sub/smr'
      ],
      [
        'id' => 'innovation',
        'name' => '혁신설계',
        'link' => '/sub/innovation'
      ],
      [
        'id' => 'technology',
        'name' => '혁신기술',
        'link' => '/sub/technology'
      ],
      [
        'id' => 'differentiation',
        'name' => '차별성',
        'link' => '/sub/differentiation'
      ]
    ]
  ],
  [
    'id' => 'community',
    'name' => '커뮤니티',
    'link' => '/notice',
    'sb_2menus' => [
      [
        'id' => 'notice',
        'name' => '공지사항',
        'link' => '/notice'
      ],
      [
        'id' => 'faq',
        'name' => 'FAQ',
        'link' => '/faq'
      ],
      [
        'id' => 'library',
        'name' => '자료실',
        'link' => '/library'
      ],
      [
        'id' => 'inquiry',
        'name' => '문의하기',
        'link' => '/qa'
      ]
    ]
  ],
  [
    'id' => 'media',
    'name' => '미디어룸',
    'link' => '/news',
    'sb_2menus' => [
      [
        'id' => 'news',
        'name' => '사업단 소식',
        'link' => '/news'
      ],
      [
        'id' => 'press',
        'name' => 'i-SMR 보도자료',
        'link' => '/press'
      ],
      [
        'id' => 'newsletter',
        'name' => 'SMR 뉴스레터',
        'link' => '/newsletter'
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