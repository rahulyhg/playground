<?php
/**
 * ♔ TestLink Open Source Project - http://testlink.sourceforge.net/
 * This script is distributed under the GNU General Public License 2 or later.
 *
 * Filename $RCSfile: texts.php,v $
 * @version $Revision: 1.3 $
 * @modified $Date: 2010/06/24 17:25:55 $ by $Author: asimon83 $
 * @author Martin Havlat and reviewers from TestLink Community
 *
 * --------------------------------------------------------------------------------------
 *
 * Scope:
 * English (en_GB) texts for help/instruction pages. Strings for dynamic pages
 * are stored in strings.txt pages.
 *
 * Here we are defining GLOBAL variables. To avoid override of other globals
 * we are using reserved prefixes:
 * $TLS_help[<key>] and $TLS_help_title[<key>]
 * or
 * $TLS_instruct[<key>] and $TLS_instruct_title[<key>]
 *
 *
 * Revisions history is not stored for the file
 *
 * ------------------------------------------------------------------------------------ 
 * Korean translation
 *-------------------------------------------------------------------
 * Translated by Jiun PARK
 * (DQA Team, OPENTECH INC. R&D Center)
 * E-mail : rustyheart@gmail.com
 * Issued Date : 2009/05/27
 *
 *-------------------------------------------------------------------
 */

$TLS_htmltext_title['assignReqs']	= "테스트 케이스에 요구사항 지정하기";
$TLS_htmltext['assignReqs'] 		= "<h2>목적:</h2>
<p>사용자는 요구사항들과 테스트 케이스들간의 관계를 지정할 수 있습니다. 테스트 설계자는
0..n에서 0..n까지 관계를 지정할 수 있습니다. 즉, 하나의 테스트 케이스는 요구사항을 지정하지 않거나,
하나 이상의 요구사항을 지정할 수도 있습니다. 이런 관계표시는 요구사항의 테스트 커버리지를
조사하거나 테스트하는 동안 어떤 기능이 실패 했는지를 알아 내는데 도움을 줍니다. 
이런 분석을 통해 모든 기대치가 충족 되었음을 확인할 수 있습니다.</p>

<h2>시작하기:</h2>
<ol>
	<li>왼쪽의 트리에서 테스트 케이스를 선택합니다. 오른쪽 화면 제일 위에 요구사항 명세서가 표시되는
	콤보상자가 나타납니다.</li>
	<li>원하는 요구사항 명세서를 선택하면, TestLink가 자동으로 페이지를 새로 고침 합니다.</li>
	<li>화면의 중간부분에 테스트 케이스와 연결된 모든 요구사항을 표시합니다.
	화면 아랫부분에는 테스트 케이스와 연결되지 않은 모든 '사용 가능한 요구사항들'을 표시 합니다.
	설계자는 이 테스트 케이스에 의해 보장이 되는 요구사항을 선택하고 '지정'버튼을 누르면 됩니다.
	이렇게 지정된 요구사항들은 화면 중간부분의 '지정된 요구사항들'에 표시 됩니다.</li>
</ol>";


// --------------------------------------------------------------------------------------
$TLS_htmltext_title['editTc']	= "테스트 명세";
$TLS_htmltext['editTc'] 		= "<h2>목적:</h2>
<p><i>테스트 명세</i> 에서 사용자는 모든 <i>테스트 스위트들</i> 과 <i>테스트 케이스들</i> 을  " .
		"보고 편집할 수 있습니다. 테스트 케이스들에는 버전이 메겨져 있고, 모든 버전들을 " .
		"이 곳에서 관리할 수 있습니다.</p>

<h2>시작하기:</h2>
<ol>
	<li>왼쪽의 트리에서 제일 위에 있는 테스트 프로젝트를 선택하세요. <i>참고: " .
	"테스트 프로젝트는 화면 오른쪽 위에 있는 드롭다운 리스트박스에서 언제든지 변경 할 수 있습니다.</i></li>" .
	"<li><b>새 테스트 스위트</b> 버튼을 클릭해서 새로운 테스트 스위트를 생성합니다. 테스트 스위트를 사용하여  " .
	"당신의 편의에 따라 테스트 문서의 구조를 만들 수 있습니다 (기능/비기능 테스트, " .
	"제품 구성 또는 사양, 변경 요구, 등). 테스트 스위트의 설명에는 테스트 케이스의 범위, " .
	"기본 환경, 관련문서의 링크, 제한사항과 다른 유용한 정보를 넣을 수 있습니다. " .
	"일반적으로, 설명의 기재사항은 하위의 테스트 케이스들에 공통적으로 적용됩니다." .
	"테스트 케이스는 &quot;폴더&quot; 구조를 따릅니다. 그래서 사용자는 테스트 프로젝트내에서 " .
	"테스트 스위트를 이동하고 복사할 수 있습니다. " .
	"또한, 테스트 스위트와 테스트 케이스를 가져오거나 내보낼 수 있습니다.</li>
	<li>테스트 스위트는 가변적인 폴더입니다. 테스트 프로젝트 내에서 테스트 스위트를 이동하거나 복사 할 " .
	"수 있습니다. 테스트 스위트는 케스트 케이스를 포함하여 가져오거나 내보낼 수 있습니다.
	<li>트리메뉴에서 새로 생성된 테스트 스위트를 선택하고, <b>테스트 케이스 생성</b> 버튼을 클릭해서 새 " .
	"테스트 케이스를 만듭니다. 테스트 케이스에는 테스트 시나리오, 예상 결과, 테스트 프로젝트에 " .
	"정의된 사용자 필드(보다 자세한 정보는 사용자 메뉴얼을 참고 하세요)를 기재합니다. " .
	"추적성을 높이기 위해 <b>키워드</b> 를 지정할 수도 있습니다.</li> " .
	"<li>왼쪽의 트리메뉴를 이용해 테스트 케이스를 탐색하고 편집할 수 있습니다. 테스트 케이스는 변경된 이력을 기록합니다.</li>
	<li>테스트 케이스들이 준비 되면, 만들어진 테스트 명세를 <span class=\"help\" onclick=
	\"javascript:open_help_window('glosary','$locale');\">테스트 계획</span> 에 지정합니다.</li>
</ol>

<p>TestLink를 사용하여 테스트 케이스들을 테스트 스위트로 정리할 수 있습니다." .
"테스트 스위트는 다른 테스트 스위트와 연계 될 수 있으며, 계층적인 구조로 만들 수 있습니다.
 당신은 테스트 케이스와 함께 테스트 스위트 정보도 같이 인쇄 할 수 있습니다.</p>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['searchTc']	= "테스트 케이스 찾기";
$TLS_htmltext['searchTc'] 		= "<h2>목적:</h2>

<p>키워드나 문자열이 포함된 테스트 케이스를 찾습니다. 찾을 때 대소문자를
구별하지 않습니다. 검색결과는 이 테스트 프로젝트에 포함된 테스트 케이스만 보여 줍니다.</p>

<h2>찾기:</h2>

<ol>
	<li>찾을 문자열을 폼에 기재합니다. 문자열 입력시 왼쪽에 공백을 사용하면 안됩니다.</li>
	<li>키워드를 선택하거나 '사용 안함' 으로 내버려 둡니다.</li>
	<li>찾기버튼을 클릭합니다.</li>
	<li>해당하는 테스트 케이스들이 표시됩니다. 제목을 클릭하면 편집할 수 있습니다.</li>
</ol>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['printTestSpec']	= "테스트 명세 인쇄하기"; //printTC.html
$TLS_htmltext['printTestSpec'] 			= "<h2>목적:</h2>
<p>이 화면에서 하나의 테스트 케이스, 테스트 스위트의 모든 테스트 케이스, 테스트 프로젝트나 
테스트 계획의 모든 테스트 케이스들을 인쇄할 수 있습니다.</p>
<h2>시작하기:</h2>
<ol>
<li>
<p>표시를 원하는 부분을 옵션에서 선택하고 난 후, 테스트 케이스나 테스트 스위트 혹은 
테스트 프로젝트를 선택합니다. 그러면 인쇄할 수 있는 화면이 나타납니다.</p>
</li>
<li><p>문서 옵션의 \"문서 형식\" 에서 HTML, OpenOffice Writer 또는 MS Word 문서 중 원하는 
형식을 선택 합니다.
보다 자세한 정보는 <span class=\"help\" onclick=\"javascript:open_help_window('printFilter',
'{$locale}');\">도움말</span> 을 참고 하세요.</p>
</li>
<li><p>화면에 나타난 정보를 브라우저의 인쇄 기능을 사용하여 실제 인쇄하세요.<br />
<i>노트: 오른쪽 화면만 출력하도록 설정 하시기 바랍니다.</i></p>
</li>
</ol>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['reqSpecMgmt']	= "요구사항 명세 설계하기"; //printTC.html
$TLS_htmltext['reqSpecMgmt'] 			= "<p>당신은 요구사항 명세서를 관리할 수 있습니다.</p>

<h2>요구사항 명세</h2>

<p>요구사항은 테스트 프로젝트에 관련된 <b>요구사항 명세서</b>들의 모음입니다.
<br /> TestLink는 아직 요구사항과 요구사항 명세의 버전 사용을 지원하지 않습니다.
그래서, 명세의 <b>제목</b> 뒤에 문서의 버전을 기재 할 수 있습니다.
사용자는 간단한 설명이나 노트를 <b>범위</b> 필드에 기재할 수 있습니다.</p>

<p><b><a name='total_count'>모든 요구사항의 개수</a></b>는 모든 요구사항이 
TestLink에 추가 되지 않았을 경우, 요구사항의 커버리지를 평가하기 위해 제공됩니다.
이 값이 <b>0</b>이면 TestLink에 등록된 요구사항의 현재 개수가 매트릭에 사용됩니다.</p>
<p><i>예제) SRS에 모두 200개의 요구사항이 있는데, 그 중 50개만 TestLink에 추가 되었습니다.
추가된 50개의 요구사항이 모두 테스트 되었다고 가정하면, 테스트 커버리지는 25%가 됩니다.</i></p>


<h2><a name='req'>요구사항</a></h2>

<p>왼쪽의 트리에서 요구사항 명세의 제목을 클릭하세요. 만약 등록된 요구사항 명세가 없으면, " .
"프로젝트 이름을 클릭해서 생성 하세요. 당신은 요구사항을 생성, 편집, 삭제하거나
문서로부터 가져올 수도 있습니다. 각각의 요구사항은 제목, 범위, 상태 값으로 이루어져 있습니다.
상태는 '보통' 또는 '테스트 할 수 없음' 중 하나가 됩니다. 테스트 할 수 없는 요구사항들은 매트릭에 
포함되지 않습니다. 구현할 수 없는 기능이나 잘 못 설계된 요구사항들을 '테스트 할 수 없음'으로 표시
하면 됩니다.</p>

<p>당신은 명세 화면에서 요구사항들을 여러개 선택하여 새로운 테스트 케이스들을 생성할 수 있습니다.
이렇게 생성된 테스트 케이스들은 환경설정에 정의된 이름의 테스트 스위트에 포함됩니다.
<i>(기본값 : \$tlCfg->req_cfg->default_testsuite_name =
'Test suite created by Requirement - Auto';)</i>. 제목과 범위가 테스트 케이스로 복사 됩니다.</p>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['keywordsAssign']	= "키워드 지정하기";
$TLS_htmltext['keywordsAssign'] 			= "<h2>목적:</h2>
<p>키워드 지정 화면은 테스트 스위트나 테스트 케이스에 키워드를 
일괄적으로 지정할 수 있는 곳입니다.</p>

<h2>키워드 지정하기:</h2>
<ol>
	<li>왼쪽의 트리에서 테스트 스위트나 테스트 케이스를 선택합니다.</li>
	<li>오른쪽 화면의 제일 윗부분에서 테스트 케이스에 사용가능한 키워드를 
	    지정할 수 있습니다.</li>
	<li>아래 선택화면에서 보다 세부적으로 지정할 수 있습니다.</li>
</ol>

<h2>테스트 계획에서 키워드 지정에 대한 중요한 정보:</h2>
<p>명세에 대한 키워드 지정은 테스트 계획에 포함된 최신 버전의 테스트 케이스에만 영향을 미칩니다.
만약 테스트 계획에 이전 버전의 테스트 케이스가 포함되어 있으면, 당신이 지정한 키워드가 
테스트 계획에 표시 되지 않을 것입니다.
</p>
<p>TestLink가 이런 접근방법을 사용하기 때문에, 테스트 케이스에 있는 이전 버전 테스트 케이스들은 
가장 최근 버전의 테스트 케이스에 지정된 키워드가 지정 될 수 없습니다. 테스트 계획의 테스트 케이스들을
업데이트 하려면, '테스트 케이스 버전 업그레이드'를 이용하여 업데이트 후 키워드 지정을 사용하시기
바랍니다.</p>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['executeTest']	= "테스트 케이스 실행";
$TLS_htmltext['executeTest'] 		= "<h2>목적:</h2>

<p>사용자가 테스트 케이스들을 실행하는 곳입니다. 사용자는 선택된 빌드의 테스트 케이스에 실행결과를
지정할 수 있습니다. 필터와 설정에 대한 자세한 사항은 도움말을 참고 하세요 " .
		"(물음표 아이콘을 클릭하세요).</p>

<h2>시작하기:</h2>

<ol>
	<li>반드시 테스트 계획의 빌드를 정의 해야 합니다.</li>
	<li>왼쪽의 네비게이터에서 드롭다운 박스에서 빌드를 선택하고 \"적용\" 버튼을 클릭합니다.</li>
	<li>트리메뉴에서 테스트 케이스를 클릭합니다.</li>
	<li>테스트 결과와 실행 노트 또는 버그를 기록합니다.</li>
	<li>결과를 저장합니다.</li>
</ol>
<p><i>노트: GUI에서 직접 버그를 생성/추적하려면, TestLink가 버그 추적 시스템과 연동 되도록 
설정되어 있어야 합니다.</i></p>";

// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['showMetrics']	= "테스트 보고서와 매트릭에 대한 설명";
$TLS_htmltext['showMetrics'] 		= "<p>네티게이터의 윗부분에 선택된 " .
		"테스트 계획에 대한 보고서들 입니다. 현재 실행하는 테스트 계획 말고 다른 테스트 계획을 선택할 수도 있습니다.
다음과 같은 보고서 종류를 선택할 수 있습니다:</p>
<ul>
<li><b>HTML</b> - 웹페이지로 표시되는 보고서</li>
<li><b>OpenOffice Writer</b> - OpenOffice Writer 양식의 보고서</li>
<li><b>OpenOffice Calc</b> - OpenOffice Calc 양식의 보고서</li>
<li><b>MS Excel</b> - Microsoft Excel 양식의 보고서</li>
<li><b>Email (HTML)</b> - 사용자에게 메일로 보내지는 보고서</li>
<li><b>차트</b> - 그래프를 포함한 보고서 (Flash)</li>
</ul>

<p>인쇄 버튼을 누르면 왼쪽의 네비게이션 없이 본문만 인쇄 됩니다.</p>
<p>여러가지 형태의 보고서가 있으며, 각각에 대해서는 아래 사항을 참고 하시기 바랍니다.</p>

<h3>테스트 계획</h3>
<p>'테스트 계획' 문서에는 항목과 문서구조를 정의하는 옵션이 있습니다.</p>

<h3>테스트 보고서</h3>
<p>'테스트 보고서' 문서에는 항목과 문서구조를 정의하는 옵션이 있습니다.
여기에는 테스트 케이스들의 결과도 표시할 수 있습니다.</p>

<h3>일반적인 테스트 계획의 매트릭</h3>
<p>이 페이지에서 테스트 계획의 가장 최근 상태를 테스트 스위트별, 담당자별, 키워드별로 볼 수 있습니다. 
'현재 상태'는 가장 최근 빌드의 실행된 테스트 케이스들에 의해 결정 됩니다. 예를 들어, 테스트 케이스가 
여러 빌드들에 걸쳐 실행 되었을 경우, 가장 마지막 결과만 가져 오게 됩니다.</p>

<p>'마지막 테스트 결과'는 많은 보고서들에서 사용되는 개념으로, 아래와 같이 정의 됩니다 :</p>
<ul>
<li>테스트 계획에 추가된 빌드의 순서가 가장 최근 빌드를 결정합니다. 가장 최근 빌드의 결과가 모든 이전 
빌드들의 결과값을 대표합니다. 예를 들면, 빌드 1에서는 '실패'로 판정하고, 빌드 2에서는 '통과'로 판정 했다면 
최종 결과는 '통과'가 됩니다.</li>
<li>만약 테스트 케이스가 같은 빌드에서 여러번 실행될 경우, 가장 최근의 실행결과 값을 사용합니다. 
예를 들면, 빌드 3이 여러분의 팀에 릴리즈가 되고 테스터 1이 오후2시에 '통과' 판정을 하고, 테스터 2가 
오후3시에 '실패' 판정을 하면, 최종 결과는 '실패'가 됩니다.</li>
<li>빌드에서 '실행 안함'상태인 테스트 케이스는 결과 계산에 포함되지 않습니다.
예를 들면, 빌드 1에서 '통과'로 판정하고, 빌드 2에서 실행하지 않으면 최종 결과는 '통과'가 됩니다.</li>
</ul>
<p>다음과 같은 표들이 표시됩니다 : </p>
<ul>
	<li><b>최상위 테스트 스위트별 결과</b>
	각각의 최상위 스위트의 결과를 표시합니다. 테스트 케이스, 통과, 실패, 중단, 실행안함 의 개수를 표시하고
	실행률을 표시합니다. 테스트 케이스의 '실행률'은 통과, 실패, 중단 중 하나의 값을 가집니다.
	최상위 스위트의 결과는 하위 스위트를 모두 포함하고 있습니다.</li>
	<li><b>키워드별 결과</b>
	현재 테스트 계획의 테스트 케이스에 지정된 모든 키워드와, 이에 연결된 결과를 표시합니다.</li>
	<li><b>테스트별 결과</b>
	현재 테스트 계획의 테스트 케이스에 지정된 테스터별 결과를 표시합니다. 테스터가 지정 되지 않은
	것들은 '지정안됨' 으로 표시 됩니다.</li>
</ul>

<h3>모든 빌드 현황</h3>
<p>모든 빌드의 실행결과를 표시합니다. 각각의 빌드에 대해, TC합계, 통과 합계, 통과 %, 실패 합계, 
실패 %, 중단 합계, 중단 %, 실행안함 합계, 실행안함 %를 표시합니다. 만약 테스트 케이스가 같은 빌드에서 
두번 실행되면, 가장 최근에 실행한 결과값이 계산에 사용 됩니다.</p>

<h3>매트릭 질의</h3>
<p>이 보고서는 질의 폼 화면과 쿼리된 자료를 포함한 질의 결과 화면으로 구성 되어 있습니다. 
질의 폼 화면에는 4개의 컨트롤로 된 질의 화면이 표시됩니다. 각각의 컨트롤은 최대한 많은 빌드와 
테스트 케이들을 검색할 수 있는 값으로 초기화 되어 있습니다. 사용자가 컨트롤의 값을 변경하여, 
특정 테스터, 키워드, 스위트, 빌드를 조합하여 보고서를 만들 수 있습니다.</p>

<ul>
<li><b>키워드</b> 0~1개의 키워드들을 선택할 수 있습니다. 기본값은 아무 키워드도 선택하지 않은 것입니다. 
만약 키워드가 지정되지 않으면, 키워드 지정에 상관 없이 모든 테스트 케이스가 관련 됩니다. 키워드는 
테스트 명세나 키워드 관리 화면에서 지정할 수 있습니다. 테스트 케이스에 키워드를 지정하는 것은 모든 
테스트 계획들과 테스트 케이스의 모든 버전들에 해당 됩니다. 특정 키워드에 대한 결과에 흥미가 있다면 
이 컨트롤을 설정하면 됩니다.</li>
<li><b>담당자</b> 0~1명의 담당자를 선택할 수 있습니다. 기본값은 아무도 선택하지 않은 것 입니다. 
담당자가 지정되지 않으면, 담당자 지정에 상관 없이 모든 테스트 케이스가 관련 됩니다. 현재 '지정안됨'인 
테스트 케이스를 검색할 수 있는 방법은 없습니다. 담당자는 '테스트 케이스 실행 지정' 화면에서 지정할 수 있으며, 
테스트 계획의 기본요소가 됩니다. 만약 특정 담당자가 실행한 결과에 흥미가 있다면 이 컨트롤을 설정하면 됩니다.</li>
<li><b>최상위 스위트</b> 0~n개의 최상위 스위트를 선택할 수 있습니다. 기본값은 모든 스위트를 선택하는 것입니다.
선택한 스위트들만 결과 매트릭을 절의할 때 사용합니다. 특정 스위트에 대한 결과에 흥미가 있다면 
이 컨트롤을 설정하면 됩니다.</li>
<li><b>빌드</b> 1~n개의 빌드를 선택할 수 있습니다. 기본값은 모든 빌드를 선택하는 것입니다. 선택한 빌드에서 
수행된 결과만 매트릭을 생성하는데 사용 됩니다. 예를 들어, 마지막 3개의 빌드에서 몇개의 테스트 케이스가 수행 
되었는지를 보려면, 이 컨트롤을 설정하시면 됩니다.
키워드, 담당자, 최상위 스위트를 지정하는 것은 스위트별, 테스트 계획별 매트릭을 계산 하는데 사용하는 테스트 케이스들의 
개수를 지정하는 것입니다. 예를 들어서, 담당자는 'Greg', 키워드는 'Priority 1',  그리고 모든 가능한 스위트를 지정했다면, 
Greg에게 지정된 Priority 1인 것들이 사용 됩니다. '# 테스트 케이스'는 이런 3가지 컨트롤에 의한 테스트 케이스들의 합을 
나타냅니다. 빌드 선택은 테이스의 '통과', '실패', '중단', '실행안함' 판정에 영향을 미칩니다. 위에 설명한 
'마지막 테스트 결과' 규칙을 참고 하시기 바랍니다.</li>
</ul>
<p>'질의 실행' 버튼을 누르면 결과 화면이 표시 됩니다.</p>

<p>질의 보고서 화면이 표시 됩니다 : </p>
<ol>
<li>보고서를 작성하는데 사용된 질의 파라메터</li>
<li>전체 테스트 계획의 합계</li>
<li>스위트 별 결과 합계 (합 / 통과 / 실패 / 중단 / 실행안함) 와 스위트의 모든 실행 결과.
만약 테스트 케이스가 여러 빌드에서 여러번 실행 되었으면, 선택된 모든 빌드의 실행결과를 표시합니다. 
하지만, 테스트 스위트의 요약에는 '마지막 테스트 결과'만 포함됩니다.</li>
</ol>

<h3>중단, 실패, 실행하지 않은 테스트 케이스 보고서들</h3>
<p>이 보고서는 현재 중단, 실패, 실행안됨 모든 테스트 케이스를 보여 줍니다. (일반적인 테스트 계획 매트릭에서 
설명했던)'마지막 테스트 결과'논리는 이 곳에서도 사용 됩니다. 중단 된 테스트 케이스 보고서와 실패된 테스트 케이스 
보고서에서는 버그 추적 시스템이 설정 되어 있을 경우 버그의 연결관계도 보여 줍니다.</p>

<h3>테스트 보고서</h3>
<p>테스트 케이스의 모든 빌드의 상태를 볼 수 있습니다. 같은 빌드에서 여러번 실행이 되었다면 
가장 최근의 실행 결과 사용 됩니다. 자료의 양이 많다면 보다 쉽게 보고서를 보기 위해 엑셀로 내보내기 할 것을 
권고합니다.</p>

<h3>차트 - 일반적인 테스트 계획 매트릭</h3>
<p>차트에서도 '마지막 테스트 결과' 논리가 사용됩니다. 현재 테스트 계획의 매트릭을 시각적으로 보여주기 위해 
그래프가 움직입니다. 다음과 같은 4가지 차트가 제공 됩니다 : </p>
<ul><li>모든 성공 / 실패 / 중단 / 실행안함 에 대한 파이 차트</li>
<li>키워드별 결과 막대 차트</li>
<li>테스터별 결과 막대 차트</li>
<li>최상위 스위트별 결과 막대 차트</li>
</ul>
<p>막대 차트에 있는 막대들은 통과, 실패, 중단, 실행안한 케이스들의 대강의 숫자를 정의할 수 있으며 
색으로 구별 되어 있습니다.</p>

<h3>각 테스트 케이스에 대한 모든 버그들</h3>
<p>이 보고서는 현재 프로젝트에서 버그 필드가 값으로 채워져 있는 테스트 케이스들을 보여 줍니다. 
이 보고서는 버그 추적 시스템이 연결 되어 있어야 사용할 수 있습니다.</p>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['planAddTC']	= "테스트 계획에 테스트 케이스 추가 / 삭제하기"; // testSetAdd
$TLS_htmltext['planAddTC'] 			= "<h2>목적:</h2>
<p>(리드 레벨 권한을 가진) 사용자는 테스트 계획에 테스트 케이스를 추가하거나 삭제할 수 있습니다..</p>

<h2>테스트 케이스 추가 / 삭제하기:</h2>
<ol>
	<li>테스트 스위트를 클릭하여 그속에 포함된 모든 테스트 스위트들과 테스트 케이스들을 보이게 합니다.</li>
	<li>테스트 케이스들을 선택하고 '테스트 케이스 추가 / 삭제' 버튼을 클릭합니다.
		노트: 같은 테스트 케이스를 여러번 추가 할 수 없습니다.</li>
</ol>";

// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['tc_exec_assignment']	= "테스트를 실행할 테스터 지정하기";
$TLS_htmltext['tc_exec_assignment'] 		= "<h2>목적</h2>
<p>이 화면에서 테스트 리더는 테스트 계획의 개별 테스트들을 사용자에게 지정할 수 있습니다.</p>

<h2>시작하기</h2>
<ol>
	<li>실행할 테스트 스위트나 테스트 케이스를 선택합니다.</li>
	<li>테스터를 선택합니다.</li>
	<li>저장 버튼을 클릭합니다.</li>
	<li>지정된 사항을 확인하려면 실행 페이지를 열어 보시기 바랍니다. 특정 사용자가 지정된 것만 보려면 필터를 설정하면 됩니다.</li>
</ol>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['planUpdateTC']	= "테스트 계획의 테스트 케이스들 업데이트하기";
$TLS_htmltext['planUpdateTC'] 		= "<h2>목적</h2>
<p>테스트 명세가 변경 되었을 경우, 이 페이지에서 테스트 케이스를 새 버전으로 업데이트 
할 수 있습니다. 테스트 도중 어떤 기능이 구체화 되면서 이런 경우가 발생할 수 있습니다." .
		" 사용자는 테스트 명세를 변경할 경우, 테스트 계획 역시 변경해야 합니다. 그렇지 않으면, 테스트" .
		" 계획에는 여전히 원래 버전이 있게 됩니다.</p>

<h2>시작하기</h2>
<ol>
	<li>테스트 스위트나 테스트 케이스를 선택합니다.</li>
	<li>개별 테스트 케이스의 새 버전 콤보박스에서 버전을 선택합니다.</li>
	<li>'테스트 계획 업데이트'버튼을 눌러 변경 사항을 저장합니다.</li>
	<li>확인방법: 실행 페이지를 열어서 테스트 케이스의 내용을 확인하세요.</li>
</ol>";


// ------------------------------------------------------------------------------------------
$TLS_htmltext_title['test_urgency']	= "테스트의 긴급도를 높거나 낮게 설정하기";
$TLS_htmltext['test_urgency'] 		= "<h2>목적</h2>
<p>TestLink는 테스트 케이스의 우선순위에 영향을 미치는 테스트 스위트의 긴급도를 설정할 수 있습니다.
테스트 우선순위는 테스트 케이스의 중요도와 테스트 계획의 긴급도에 따라 결정됩니다. 테스트 리더는 
특정 테스트 케이스들이 먼저 실행 되도록 설정 할 수 있습니다. 이 기능은 시간이 촉박할 
경우에도 가장 중요한 테스트 들을 반드시 수행하도록 하는데 도움을 줍니다.</p>

<h2>시작하기</h2>
<ol>
	<li>왼쪽의 네비게이터에서 긴급ㄷ도를 설정할 테스트 스위트를 선택하세요.</li>
	<li>긴급레벨을 선택하세요 (높음, 보통, 낮음). 보통이 기본값입니다. 
	사용빈도가 떨어지는 것에는 우선순위를 낮추고, 중요한 변경이 있는 곳은 우선순위를 
	높일 수 있습니다.</li>
	<li> '저장' 버튼을 클릭하여 변경 사항을 저장합니다.</li>
</ol>
<p><i>예를 들어, 낮은 긴급도의 테스트 스위트 안에 높은 중요도의 테스트 케이스가 있으면, " .
		"우선순위는 보통으로 설정 됩니다.</i>";


// ------------------------------------------------------------------------------------------

?>