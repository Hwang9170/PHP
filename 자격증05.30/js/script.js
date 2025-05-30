$(function() { // $(document).ready()와 같음 — HTML 문서가 모두 로드된 후 실행됨
	
	// ========== 네비게이션 메뉴 동작 ==========
	
	$("nav > ul > li").mouseenter(function() { // 메뉴 항목에 마우스를 올렸을 때
		$(this).children(".sub").stop().slideDown(); 
		// 현재 li의 자식 요소인 .sub 메뉴를 아래로 슬라이드하며 보여줌
		// stop()은 연속 hover 시 애니메이션 중첩을 막기 위해 사용
	});

	$("nav > ul > li").mouseleave(function() { // 메뉴 항목에서 마우스를 뗐을 때
		$(".sub").stop().slideUp(); 
		// 모든 .sub 메뉴를 위로 슬라이드하면서 닫음
	});


	// ========== 이미지 슬라이드 기능 ==========
	
	let i = 0; // 현재 슬라이드 인덱스를 저장할 변수
	
	function slide() { // 슬라이드를 이동시키는 함수 정의
		if (i < 2) { // 슬라이드가 0, 1, 2번까지 있으므로
			i++; // 인덱스 증가
		} else {
			i = 0; // 마지막 슬라이드 다음엔 다시 처음으로
		}
		$(".slide ul").animate({marginLeft: -1200 * i}, 1000); 
		// ul의 왼쪽 마진을 조절해서 슬라이드 이동 (1초간 이동)
		// 1200px은 각 슬라이드의 너비
	}
	
	setInterval(slide, 3000); 
	// 3초(3000ms)마다 slide() 함수를 반복 실행하여 자동 슬라이드


	// ========== 팝업창 열고 닫기 ==========
	
	$(".pop").click(function() {
		$(".popup").show(); 
		// 공지사항 중 class="pop"을 클릭하면 class="popup" 창을 보여줌
	});
	
	$(".close button").click(function() {
		$(".popup").hide(); 
		// 팝업 안의 닫기 버튼을 클릭하면 popup을 숨김
	});

});
