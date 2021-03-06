<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = 0;
$layout_info->layout = 'sketchbook';
$layout_info->type = NULL;
$layout_info->path = './layouts/sketchbook/';
$layout_info->title = 'sketchbook5';
$layout_info->description = '
		skethchbook5 Layout Skin. 간결한 블로그형 디자인, PC와 모바일까지 대응하는 반응형 디자인.
		※ 주의 : 메인메뉴는 3차 메뉴까지 지원하고, 모바일의 경우 1차 메뉴는 8개까지 지원합니다.
	';
$layout_info->version = '1.6.3.6';
$layout_info->date = '20100303';
$layout_info->homepage = NULL;
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = NULL;
$layout_info->license_link = NULL;
$layout_info->layout_type = 'P';
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = 'sketchbook';
$layout_info->author[0]->email_address = 'contact@sketchbooks.co.kr';
$layout_info->author[0]->homepage = 'http://sketchbooks.co.kr/';
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->colorset = new stdClass;
$layout_info->extra_var->colorset->group = '레이아웃 일반';
$layout_info->extra_var->colorset->title = '컬러셋';
$layout_info->extra_var->colorset->type = 'select';
$layout_info->extra_var->colorset->value = $vars->colorset;
$layout_info->extra_var->colorset->description = '원하시는 컬러셋을 선택해주세요.';
$layout_info->extra_var->colorset->options = array();
$layout_info->extra_var->colorset->options['white'] = new stdClass;
$layout_info->extra_var->colorset->options['white']->val = '하얀색(기본)';
$layout_info->extra_var->colorset->options['black'] = new stdClass;
$layout_info->extra_var->colorset->options['black']->val = '검은색';
$layout_info->extra_var->no_mobile = new stdClass;
$layout_info->extra_var->no_mobile->group = '레이아웃 일반';
$layout_info->extra_var->no_mobile->title = '*일반/모바일 개별 사용';
$layout_info->extra_var->no_mobile->type = 'select';
$layout_info->extra_var->no_mobile->value = $vars->no_mobile;
$layout_info->extra_var->no_mobile->description = '1. 모바일 일체형 레이아웃으로 사용하지 않고 \'일반 레이아웃으로만 사용\' 하거나, 2. m.layouts/sketchbook5M에 파일을 넣고 \'모바일 전용으로 사용\' 하시려면 이 항목을 \'개별 사용\'으로 하세요.';
$layout_info->extra_var->no_mobile->options = array();
$layout_info->extra_var->no_mobile->options[''] = new stdClass;
$layout_info->extra_var->no_mobile->options['']->val = '개별 사용 안함(기본)';
$layout_info->extra_var->no_mobile->options['Y'] = new stdClass;
$layout_info->extra_var->no_mobile->options['Y']->val = '개별 사용';
$layout_info->extra_var->frame = new stdClass;
$layout_info->extra_var->frame->group = '레이아웃 일반';
$layout_info->extra_var->frame->title = '레이아웃 프레임';
$layout_info->extra_var->frame->type = 'select';
$layout_info->extra_var->frame->value = $vars->frame;
$layout_info->extra_var->frame->description = '프레임 형태를 결정합니다. (※알림 : 이 레이아웃은 위젯 영역이 해상도에 따라 하단에 자리하는 특이한 형태입니다. 예) 기본 프레임(메뉴+컨텐트+위젯)에서 레이아웃 최대넓이(1190px)을 설정한 경우 1200px 이 되지 않는 경우 위젯이 하단에 위치하게 됩니다.';
$layout_info->extra_var->frame->options = array();
$layout_info->extra_var->frame->options['ece'] = new stdClass;
$layout_info->extra_var->frame->options['ece']->val = '메뉴 + 컨텐트 + 위젯(기본)';
$layout_info->extra_var->frame->options['c'] = new stdClass;
$layout_info->extra_var->frame->options['c']->val = '컨텐트';
$layout_info->extra_var->frame->options['ec'] = new stdClass;
$layout_info->extra_var->frame->options['ec']->val = '메뉴 + 컨텐트';
$layout_info->extra_var->frame->options['ce'] = new stdClass;
$layout_info->extra_var->frame->options['ce']->val = '컨텐트 + 위젯';
$layout_info->extra_var->reverse = new stdClass;
$layout_info->extra_var->reverse->group = '레이아웃 일반';
$layout_info->extra_var->reverse->title = '프레임 좌우 전환';
$layout_info->extra_var->reverse->type = 'select';
$layout_info->extra_var->reverse->value = $vars->reverse;
$layout_info->extra_var->reverse->description = '기본값인 좌측에 위치하는 메뉴 영역과 우측에 위치하는 위젯 영역의 위치를 좌우로 바꿉니다. 위의 \'레이아웃 프레임\' 설정과의 조합으로 \'위젯+컨텐트+메뉴, 위젯+컨텐트, 컨텐트+메뉴\'의 프레임을 만들 수 있습니다.';
$layout_info->extra_var->reverse->options = array();
$layout_info->extra_var->reverse->options[''] = new stdClass;
$layout_info->extra_var->reverse->options['']->val = '전환 안함(기본)';
$layout_info->extra_var->reverse->options['reverse'] = new stdClass;
$layout_info->extra_var->reverse->options['reverse']->val = '전환';
$layout_info->extra_var->xe_width = new stdClass;
$layout_info->extra_var->xe_width->group = '레이아웃 일반';
$layout_info->extra_var->xe_width->title = '레이아웃 최대 넓이';
$layout_info->extra_var->xe_width->type = 'text';
$layout_info->extra_var->xe_width->value = $vars->xe_width;
$layout_info->extra_var->xe_width->description = '전체폭의 최대 넓이(px)를 설정합니다. \'숫자\' 만 입력하세요. 위젯 영역(210)과 호환을 위해 980 이상 \'210\' 씩 더한 수치를 적어주세요(ex. 980, 1190(기본), 1400..). 설정하지 않으면 \'1190\' 입니다. 아래의 컨텐트 영역의 넓이와 연관을 가집니다.';
$layout_info->extra_var->content_width = new stdClass;
$layout_info->extra_var->content_width->group = '레이아웃 일반';
$layout_info->extra_var->content_width->title = '컨텐트 최대 넓이';
$layout_info->extra_var->content_width->type = 'text';
$layout_info->extra_var->content_width->value = $vars->content_width;
$layout_info->extra_var->content_width->description = '컨텐트의 영역의 최대 넓이(px)를 설정합니다. \'숫자\' 만 입력하세요. 위젯 영역(210)과 호환하려면 \'레이아웃 최대넓이\'를 기준으로 \'210\' 씩 가감 수치를 적어주시는 게 좋습니다. 입력하지 않으면 \'780\' 입니다. 주의할 것은 컨텐트 영역이 위젯 방향으로 \'30px\' 씩의 여백이 붙습니다. 주의하여 설정해주세요.';
$layout_info->extra_var->static = new stdClass;
$layout_info->extra_var->static->group = '레이아웃 일반';
$layout_info->extra_var->static->title = '메뉴 방식';
$layout_info->extra_var->static->type = 'select';
$layout_info->extra_var->static->value = $vars->static;
$layout_info->extra_var->static->description = '1. 동적 스타일 : 화면이 스크롤 됨에 따라 상단메뉴가 화면 상단에 고정되고 2차메뉴가 화면 옆에 고정됩니다. 2. 정적 방식 : 스크롤에 따라 메뉴가 올라가는 일반적인 방식입니다.';
$layout_info->extra_var->static->options = array();
$layout_info->extra_var->static->options[''] = new stdClass;
$layout_info->extra_var->static->options['']->val = '동적 스타일(기본)';
$layout_info->extra_var->static->options['Y'] = new stdClass;
$layout_info->extra_var->static->options['Y']->val = '정적 스타일';
$layout_info->extra_var->layout_font = new stdClass;
$layout_info->extra_var->layout_font->group = '레이아웃 일반';
$layout_info->extra_var->layout_font->title = '기본 글꼴 설정';
$layout_info->extra_var->layout_font->type = 'select';
$layout_info->extra_var->layout_font->value = $vars->layout_font;
$layout_info->extra_var->layout_font->description = '기본글꼴을 설정합니다. 단, 아래의 \'글꼴 선택 버튼\'을 표시하는 경우 사용자가 선택한 글꼴이 우선합니다. \'추천글꼴\'은 나눔고딕을 기본(한글의 경우)으로 하여 사용자의 다양한 환경에 대비한 여러 글꼴의 조합입니다.';
$layout_info->extra_var->layout_font->options = array();
$layout_info->extra_var->layout_font->options[''] = new stdClass;
$layout_info->extra_var->layout_font->options['']->val = '추천글꼴(기본)';
$layout_info->extra_var->layout_font->options['ng'] = new stdClass;
$layout_info->extra_var->layout_font->options['ng']->val = '나눔고딕';
$layout_info->extra_var->layout_font->options['window_font'] = new stdClass;
$layout_info->extra_var->layout_font->options['window_font']->val = '맑은 고딕';
$layout_info->extra_var->layout_font->options['tahoma'] = new stdClass;
$layout_info->extra_var->layout_font->options['tahoma']->val = '굴림';
$layout_info->extra_var->font_btn = new stdClass;
$layout_info->extra_var->font_btn->group = '레이아웃 일반';
$layout_info->extra_var->font_btn->title = '글꼴 선택 버튼';
$layout_info->extra_var->font_btn->type = 'select';
$layout_info->extra_var->font_btn->value = $vars->font_btn;
$layout_info->extra_var->font_btn->description = NULL;
$layout_info->extra_var->font_btn->options = array();
$layout_info->extra_var->font_btn->options[''] = new stdClass;
$layout_info->extra_var->font_btn->options['']->val = '표시 안함(기본)';
$layout_info->extra_var->font_btn->options['Y'] = new stdClass;
$layout_info->extra_var->font_btn->options['Y']->val = '표시';
$layout_info->extra_var->notice = new stdClass;
$layout_info->extra_var->notice->group = '레이아웃 일반';
$layout_info->extra_var->notice->title = '상단 XE 메시지 사용';
$layout_info->extra_var->notice->type = 'select';
$layout_info->extra_var->notice->value = $vars->notice;
$layout_info->extra_var->notice->description = 'XE1.5 이상부터 표시되는 비밀번호 오류, 등록 알림 등의 메세지를 레이아웃 상단에 사용합니다.';
$layout_info->extra_var->notice->options = array();
$layout_info->extra_var->notice->options[''] = new stdClass;
$layout_info->extra_var->notice->options['']->val = '사용(기본)';
$layout_info->extra_var->notice->options['N'] = new stdClass;
$layout_info->extra_var->notice->options['N']->val = '사용 안함';
$layout_info->extra_var->sns = new stdClass;
$layout_info->extra_var->sns->group = '레이아웃 일반';
$layout_info->extra_var->sns->title = 'SocialXE 로그인';
$layout_info->extra_var->sns->type = 'select';
$layout_info->extra_var->sns->value = $vars->sns;
$layout_info->extra_var->sns->description = '※ \'난다날아\'님의 \'SocialXE 모듈\' 사용자에게만 해당되는 항목입니다. 상단 로그인 부분에 소셜 로그인을 사용하고자 하는 경우 이 항목을 활성화시키세요.';
$layout_info->extra_var->sns->options = array();
$layout_info->extra_var->sns->options[''] = new stdClass;
$layout_info->extra_var->sns->options['']->val = '사용 안함(기본)';
$layout_info->extra_var->sns->options['Y'] = new stdClass;
$layout_info->extra_var->sns->options['Y']->val = '사용';
$layout_info->extra_var->sns_facebook = new stdClass;
$layout_info->extra_var->sns_facebook->group = '레이아웃 일반';
$layout_info->extra_var->sns_facebook->title = '└ SocialXE Facebook 사용';
$layout_info->extra_var->sns_facebook->type = 'select';
$layout_info->extra_var->sns_facebook->value = $vars->sns_facebook;
$layout_info->extra_var->sns_facebook->description = '소셜 로그인 링크 항목에서 Facebook을 추가합니다.';
$layout_info->extra_var->sns_facebook->options = array();
$layout_info->extra_var->sns_facebook->options[''] = new stdClass;
$layout_info->extra_var->sns_facebook->options['']->val = '사용(기본)';
$layout_info->extra_var->sns_facebook->options['Y'] = new stdClass;
$layout_info->extra_var->sns_facebook->options['Y']->val = '사용 안함';
$layout_info->extra_var->sns_twitter = new stdClass;
$layout_info->extra_var->sns_twitter->group = '레이아웃 일반';
$layout_info->extra_var->sns_twitter->title = '└ SocialXE Twitter 사용';
$layout_info->extra_var->sns_twitter->type = 'select';
$layout_info->extra_var->sns_twitter->value = $vars->sns_twitter;
$layout_info->extra_var->sns_twitter->description = '소셜 로그인 링크 항목에서 Twitter를 추가합니다.';
$layout_info->extra_var->sns_twitter->options = array();
$layout_info->extra_var->sns_twitter->options[''] = new stdClass;
$layout_info->extra_var->sns_twitter->options['']->val = '사용(기본)';
$layout_info->extra_var->sns_twitter->options['Y'] = new stdClass;
$layout_info->extra_var->sns_twitter->options['Y']->val = '사용 안함';
$layout_info->extra_var->sns_me2day = new stdClass;
$layout_info->extra_var->sns_me2day->group = '레이아웃 일반';
$layout_info->extra_var->sns_me2day->title = '└ SocialXE Me2day 사용';
$layout_info->extra_var->sns_me2day->type = 'select';
$layout_info->extra_var->sns_me2day->value = $vars->sns_me2day;
$layout_info->extra_var->sns_me2day->description = '소셜 로그인 링크 항목에서 Me2day를 추가합니다.';
$layout_info->extra_var->sns_me2day->options = array();
$layout_info->extra_var->sns_me2day->options[''] = new stdClass;
$layout_info->extra_var->sns_me2day->options['']->val = '사용(기본)';
$layout_info->extra_var->sns_me2day->options['Y'] = new stdClass;
$layout_info->extra_var->sns_me2day->options['Y']->val = '사용 안함';
$layout_info->extra_var->sns_yozm = new stdClass;
$layout_info->extra_var->sns_yozm->group = '레이아웃 일반';
$layout_info->extra_var->sns_yozm->title = '└ SocialXE Yozm 사용';
$layout_info->extra_var->sns_yozm->type = 'select';
$layout_info->extra_var->sns_yozm->value = $vars->sns_yozm;
$layout_info->extra_var->sns_yozm->description = '소셜 로그인 링크 항목에서 Yozm을 추가합니다.';
$layout_info->extra_var->sns_yozm->options = array();
$layout_info->extra_var->sns_yozm->options[''] = new stdClass;
$layout_info->extra_var->sns_yozm->options['']->val = '사용(기본)';
$layout_info->extra_var->sns_yozm->options['Y'] = new stdClass;
$layout_info->extra_var->sns_yozm->options['Y']->val = '사용 안함';
$layout_info->extra_var->hd_height = new stdClass;
$layout_info->extra_var->hd_height->group = '상단 헤더 영역 설정';
$layout_info->extra_var->hd_height->title = '상단 헤더 영역 높이';
$layout_info->extra_var->hd_height->type = 'text';
$layout_info->extra_var->hd_height->value = $vars->hd_height;
$layout_info->extra_var->hd_height->description = '상단 헤더 영역의 높이(메인메뉴를 제외한 상단 부분의 높이)를 설정합니다. 입력하지 않으면 기본은 \'100\' 입니다.';
$layout_info->extra_var->use_color = new stdClass;
$layout_info->extra_var->use_color->group = '상단 헤더 영역 설정';
$layout_info->extra_var->use_color->title = '로고 앞 메인메뉴 텍스트 표시';
$layout_info->extra_var->use_color->type = 'select';
$layout_info->extra_var->use_color->value = $vars->use_color;
$layout_info->extra_var->use_color->description = '본 레이아웃은 메인메뉴에 따라 메인로고 앞에 선택된 지정된 색상의 2차메뉴가 표시됩니다. 이 옵션을 \'사용 안함\'으로 설정하면 보통의 레이아웃처럼 로고만이 나타납니다.';
$layout_info->extra_var->use_color->options = array();
$layout_info->extra_var->use_color->options[''] = new stdClass;
$layout_info->extra_var->use_color->options['']->val = '사용(기본)';
$layout_info->extra_var->use_color->options['N'] = new stdClass;
$layout_info->extra_var->use_color->options['N']->val = '사용 안함';
$layout_info->extra_var->logo_align = new stdClass;
$layout_info->extra_var->logo_align->group = '상단 헤더 영역 설정';
$layout_info->extra_var->logo_align->title = '로고 정렬';
$layout_info->extra_var->logo_align->type = 'select';
$layout_info->extra_var->logo_align->value = $vars->logo_align;
$layout_info->extra_var->logo_align->description = NULL;
$layout_info->extra_var->logo_align->options = array();
$layout_info->extra_var->logo_align->options[''] = new stdClass;
$layout_info->extra_var->logo_align->options['']->val = '좌측(기본)';
$layout_info->extra_var->logo_align->options['center'] = new stdClass;
$layout_info->extra_var->logo_align->options['center']->val = '가운데';
$layout_info->extra_var->logo_text = new stdClass;
$layout_info->extra_var->logo_text->group = '상단 헤더 영역 설정';
$layout_info->extra_var->logo_text->title = '로고 텍스트(*)';
$layout_info->extra_var->logo_text->type = 'text';
$layout_info->extra_var->logo_text->value = $vars->logo_text;
$layout_info->extra_var->logo_text->description = '레이아웃 상단의 로고 텍스트입니다. 로고 이미지를 사용하는 경우 표시되지 않지만 로고 이미지의 대체 텍스트(alt) 역할을 하니 이 경우 반드시 적어주세요.';
$layout_info->extra_var->logo_image = new stdClass;
$layout_info->extra_var->logo_image->group = '상단 헤더 영역 설정';
$layout_info->extra_var->logo_image->title = '로고 이미지';
$layout_info->extra_var->logo_image->type = 'image';
$layout_info->extra_var->logo_image->value = $vars->logo_image;
$layout_info->extra_var->logo_image->description = '상단 로고를 이미지로 사용합니다. 이 경우에는 텍스트가 표시되지 않지만 로고 텍스트는 대체 텍스트(alt) 역할을 합니다. 세로 20px 정도가 적당합니다.';
$layout_info->extra_var->logo_image_mobile = new stdClass;
$layout_info->extra_var->logo_image_mobile->group = '상단 헤더 영역 설정';
$layout_info->extra_var->logo_image_mobile->title = '모바일 로고 이미지';
$layout_info->extra_var->logo_image_mobile->type = 'image';
$layout_info->extra_var->logo_image_mobile->value = $vars->logo_image_mobile;
$layout_info->extra_var->logo_image_mobile->description = '모바일 레이아웃의 경우 별도의 로고를 등록하실 수 있습니다. 없으면 기본 로고가 사용됩니다.';
$layout_info->extra_var->img_y = new stdClass;
$layout_info->extra_var->img_y->group = '상단 헤더 영역 설정';
$layout_info->extra_var->img_y->title = '로고 이미지 세로 위치';
$layout_info->extra_var->img_y->type = 'text';
$layout_info->extra_var->img_y->value = $vars->img_y;
$layout_info->extra_var->img_y->description = '상단을 기준으로 px단위로 \'숫자\'만 입력합니다.';
$layout_info->extra_var->img_x = new stdClass;
$layout_info->extra_var->img_x->group = '상단 헤더 영역 설정';
$layout_info->extra_var->img_x->title = '로고 이미지 가로 위치';
$layout_info->extra_var->img_x->type = 'text';
$layout_info->extra_var->img_x->value = $vars->img_x;
$layout_info->extra_var->img_x->description = '좌측을 기준으로 px단위로 \'숫자\'만 입력합니다.';
$layout_info->extra_var->index_url = new stdClass;
$layout_info->extra_var->index_url->group = '상단 헤더 영역 설정';
$layout_info->extra_var->index_url->title = '홈 페이지 URL';
$layout_info->extra_var->index_url->type = 'text';
$layout_info->extra_var->index_url->value = $vars->index_url;
$layout_info->extra_var->index_url->description = '로고를 클릭시에 이동할 홈 페이지 URL을 입력해 주세요. 입력하지 않으면 첫페이지 주소로 설정됩니다.';
$layout_info->extra_var->bg = new stdClass;
$layout_info->extra_var->bg->group = '상단 헤더 영역 설정';
$layout_info->extra_var->bg->title = '배경 이미지';
$layout_info->extra_var->bg->type = 'image';
$layout_info->extra_var->bg->value = $vars->bg;
$layout_info->extra_var->bg->description = '배경 이미지를 설정합니다.';
$layout_info->extra_var->bg_repeat = new stdClass;
$layout_info->extra_var->bg_repeat->group = '상단 헤더 영역 설정';
$layout_info->extra_var->bg_repeat->title = '배경 이미지 반복 여부';
$layout_info->extra_var->bg_repeat->type = 'select';
$layout_info->extra_var->bg_repeat->value = $vars->bg_repeat;
$layout_info->extra_var->bg_repeat->description = '반복 여부를 결정합니다.';
$layout_info->extra_var->bg_repeat->options = array();
$layout_info->extra_var->bg_repeat->options[''] = new stdClass;
$layout_info->extra_var->bg_repeat->options['']->val = '반복 안함(기본)';
$layout_info->extra_var->bg_repeat->options['repeat'] = new stdClass;
$layout_info->extra_var->bg_repeat->options['repeat']->val = '반복';
$layout_info->extra_var->bg_repeat->options['repeat-x'] = new stdClass;
$layout_info->extra_var->bg_repeat->options['repeat-x']->val = '가로 반복';
$layout_info->extra_var->bg_repeat->options['repeat-y'] = new stdClass;
$layout_info->extra_var->bg_repeat->options['repeat-y']->val = '세로 반복';
$layout_info->extra_var->bg_align = new stdClass;
$layout_info->extra_var->bg_align->group = '상단 헤더 영역 설정';
$layout_info->extra_var->bg_align->title = '배경 이미지 정렬';
$layout_info->extra_var->bg_align->type = 'select';
$layout_info->extra_var->bg_align->value = $vars->bg_align;
$layout_info->extra_var->bg_align->description = NULL;
$layout_info->extra_var->bg_align->options = array();
$layout_info->extra_var->bg_align->options[''] = new stdClass;
$layout_info->extra_var->bg_align->options['']->val = '가운데(기본)';
$layout_info->extra_var->bg_align->options['left'] = new stdClass;
$layout_info->extra_var->bg_align->options['left']->val = '왼쪽';
$layout_info->extra_var->bg_align->options['right'] = new stdClass;
$layout_info->extra_var->bg_align->options['right']->val = '오른쪽';
$layout_info->extra_var->hidden_logo = new stdClass;
$layout_info->extra_var->hidden_logo->group = '상단 헤더 영역 설정';
$layout_info->extra_var->hidden_logo->title = '숨겨진 로고 이미지';
$layout_info->extra_var->hidden_logo->type = 'image';
$layout_info->extra_var->hidden_logo->value = $vars->hidden_logo;
$layout_info->extra_var->hidden_logo->description = '스크롤 시 나타나는 우측 상단의 \'Home\' 버튼 대신에 등록하는 이미지를 사용합니다.';
$layout_info->extra_var->hiddenLogo_url = new stdClass;
$layout_info->extra_var->hiddenLogo_url->group = '상단 헤더 영역 설정';
$layout_info->extra_var->hiddenLogo_url->title = '숨겨진 로고 URL';
$layout_info->extra_var->hiddenLogo_url->type = 'text';
$layout_info->extra_var->hiddenLogo_url->value = $vars->hiddenLogo_url;
$layout_info->extra_var->hiddenLogo_url->description = '숨겨진 로고를 클릭시에 이동할 홈 페이지 URL을 입력해 주세요.';
$layout_info->extra_var->promotion = new stdClass;
$layout_info->extra_var->promotion->group = '프로모션 설정';
$layout_info->extra_var->promotion->title = '프로모션 영역 코드 입력';
$layout_info->extra_var->promotion->type = 'textarea';
$layout_info->extra_var->promotion->value = $vars->promotion;
$layout_info->extra_var->promotion->description = '헤더 밑의 프로모션 영역에 코드를 입력합니다. HTML입력도 가능합니다.';
$layout_info->extra_var->address = new stdClass;
$layout_info->extra_var->address->group = '푸터 설정';
$layout_info->extra_var->address->title = 'Copyright 입력';
$layout_info->extra_var->address->type = 'textarea';
$layout_info->extra_var->address->value = $vars->address;
$layout_info->extra_var->address->description = '하단 메뉴 밑에 저작권 등의 정보를 직접 입력할 수 있습니다. HTML입력도 가능합니다.';
$layout_info->extra_var->maker = new stdClass;
$layout_info->extra_var->maker->group = '푸터 설정';
$layout_info->extra_var->maker->title = '만든이 입력';
$layout_info->extra_var->maker->type = 'textarea';
$layout_info->extra_var->maker->value = $vars->maker;
$layout_info->extra_var->maker->description = '만든이 등의 정보를 직접 입력할 수 있습니다. HTML입력도 가능합니다. 입력하지 않으면 XE와 제작자가 출력됩니다(디자인 맞추느라 넣은 거니 사용하시는 분의 정보를 넣어서 사용하세요~).';
$layout_info->extra_var->calendar = new stdClass;
$layout_info->extra_var->calendar->group = '위젯 설정';
$layout_info->extra_var->calendar->title = '달력 위젯(유니클로)';
$layout_info->extra_var->calendar->type = 'select';
$layout_info->extra_var->calendar->value = $vars->calendar;
$layout_info->extra_var->calendar->description = '\'유니클로\' 달력 위젯을 사용합니다.';
$layout_info->extra_var->calendar->options = array();
$layout_info->extra_var->calendar->options[''] = new stdClass;
$layout_info->extra_var->calendar->options['']->val = '사용 안함(기본)';
$layout_info->extra_var->calendar->options['Y'] = new stdClass;
$layout_info->extra_var->calendar->options['Y']->val = '사용';
$layout_info->extra_var->clock = new stdClass;
$layout_info->extra_var->clock->group = '위젯 설정';
$layout_info->extra_var->clock->title = '시계 위젯(다음 위젯)';
$layout_info->extra_var->clock->type = 'select';
$layout_info->extra_var->clock->value = $vars->clock;
$layout_info->extra_var->clock->description = '\'다음 위젯뱅크\' 의 시계 위젯을 사용합니다.';
$layout_info->extra_var->clock->options = array();
$layout_info->extra_var->clock->options[''] = new stdClass;
$layout_info->extra_var->clock->options['']->val = '사용 안함(기본)';
$layout_info->extra_var->clock->options['Y'] = new stdClass;
$layout_info->extra_var->clock->options['Y']->val = '사용';
$layout_info->extra_var->category = new stdClass;
$layout_info->extra_var->category->group = '위젯 설정';
$layout_info->extra_var->category->title = '카테고리 사용';
$layout_info->extra_var->category->type = 'select';
$layout_info->extra_var->category->value = $vars->category;
$layout_info->extra_var->category->description = '카테고리가 있는 경우 위젯 영역에 카테고리가 나타납니다.';
$layout_info->extra_var->category->options = array();
$layout_info->extra_var->category->options[''] = new stdClass;
$layout_info->extra_var->category->options['']->val = '사용(기본)';
$layout_info->extra_var->category->options['N'] = new stdClass;
$layout_info->extra_var->category->options['N']->val = '사용 안함';
$layout_info->extra_var->custom1_wgt = new stdClass;
$layout_info->extra_var->custom1_wgt->group = '위젯 설정';
$layout_info->extra_var->custom1_wgt->title = '상단 커스텀 위젯 영역';
$layout_info->extra_var->custom1_wgt->type = 'textarea';
$layout_info->extra_var->custom1_wgt->value = $vars->custom1_wgt;
$layout_info->extra_var->custom1_wgt->description = '\'최근 글 위젯\' 바로 위에 영역에 위젯 코드 또는 HTML을 입력할 수 있습니다. 입력하지 않으면 나타나지 않습니다.';
$layout_info->extra_var->d_wgt = new stdClass;
$layout_info->extra_var->d_wgt->group = '위젯 설정';
$layout_info->extra_var->d_wgt->title = '최근 글 위젯 모듈번호';
$layout_info->extra_var->d_wgt->type = 'text';
$layout_info->extra_var->d_wgt->value = $vars->d_wgt;
$layout_info->extra_var->d_wgt->description = '최근 글 위젯의 사용할 \'모듈번호\'를 적어주세요. 입력하지 않으면 사용하지 않습니다. 다수의 모듈을 사용하는 경우 \',(콤마=쉼표)\'를 사용하세요.(예 : 56,245,598). 다른 위젯 등을 사용하시려는 경우에는 기존의 방식대로 \'레이아웃 편집\'에서 직접 해당부분에 코드를 입력하세요.';
$layout_info->extra_var->c_wgt = new stdClass;
$layout_info->extra_var->c_wgt->group = '위젯 설정';
$layout_info->extra_var->c_wgt->title = '최근 댓글 위젯 모듈번호';
$layout_info->extra_var->c_wgt->type = 'text';
$layout_info->extra_var->c_wgt->value = $vars->c_wgt;
$layout_info->extra_var->c_wgt->description = '최근 글 위젯 설정과 동일합니다.';
$layout_info->extra_var->t_wgt = new stdClass;
$layout_info->extra_var->t_wgt->group = '위젯 설정';
$layout_info->extra_var->t_wgt->title = '태그 위젯 모듈번호';
$layout_info->extra_var->t_wgt->type = 'text';
$layout_info->extra_var->t_wgt->value = $vars->t_wgt;
$layout_info->extra_var->t_wgt->description = '최근 글 위젯 설정과 동일합니다.';
$layout_info->extra_var->custom2_wgt = new stdClass;
$layout_info->extra_var->custom2_wgt->group = '위젯 설정';
$layout_info->extra_var->custom2_wgt->title = '하단 커스텀 위젯 영역';
$layout_info->extra_var->custom2_wgt->type = 'textarea';
$layout_info->extra_var->custom2_wgt->value = $vars->custom2_wgt;
$layout_info->extra_var->custom2_wgt->description = '\'태그 위젯\' 바로 아래 영역에 위젯 코드 또는 HTML을 입력할 수 있습니다. 입력하지 않으면 나타나지 않습니다.';
$layout_info->extra_var_count = 40;
$layout_info->menu_count = 3;
$layout_info->menu = new stdClass;
$layout_info->default_menu = 'main_menu';
$layout_info->menu->main_menu = new stdClass;
$layout_info->menu->main_menu->name = 'main_menu';
$layout_info->menu->main_menu->title = '메인 메뉴';
$layout_info->menu->main_menu->maxdepth = '3';
$layout_info->menu->main_menu->menu_srl = $vars->main_menu;
$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";
$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php";
$layout_info->default_menu = 'middle_menu';
$layout_info->menu->middle_menu = new stdClass;
$layout_info->menu->middle_menu->name = 'middle_menu';
$layout_info->menu->middle_menu->title = '중간 메뉴';
$layout_info->menu->middle_menu->maxdepth = '1';
$layout_info->menu->middle_menu->menu_srl = $vars->middle_menu;
$layout_info->menu->middle_menu->xml_file = "./files/cache/menu/".$vars->middle_menu.".xml.php";
$layout_info->menu->middle_menu->php_file = "./files/cache/menu/".$vars->middle_menu.".php";
$layout_info->default_menu = 'bottom_menu';
$layout_info->menu->bottom_menu = new stdClass;
$layout_info->menu->bottom_menu->name = 'bottom_menu';
$layout_info->menu->bottom_menu->title = '하단 메뉴';
$layout_info->menu->bottom_menu->maxdepth = '1';
$layout_info->menu->bottom_menu->menu_srl = $vars->bottom_menu;
$layout_info->menu->bottom_menu->xml_file = "./files/cache/menu/".$vars->bottom_menu.".xml.php";
$layout_info->menu->bottom_menu->php_file = "./files/cache/menu/".$vars->bottom_menu.".php";