@extends('main_layout')

@section('title') 
よくある質問 | Crofun
@stop

@section('custom_css')
	<style>
	


	</style>
@stop

@section('content')

<div class="row breadcrump p-0 m-0 project_sorting">
	<div class="container">
		<div class="row container_div">
			<div class="col-md-12 col-12 ">
				<ul class="list-inline project_category_data pt-4">
					<li class="list-inline-item">TOP &gt; よくある質問</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<div class="container ">
		<div class="row container_div">
			<div class="col-md-12 col-12">
	<div class="mt20"></div>


	<?php
		$data = [

			[
				'category' => '一般',
				'sub_category' => [
					[
						'name' => 'アカウント全般について',
						'question' => [
							[
								'ques' => '新規会員登録について',
								'ans' => '新規会員登録ページより、無料で会員登録できます。登録手段は下記の2つです。<br>
								①メールアドレスで登録<br>
								メールアドレスを利用して会員登録をする場合は、新規登録ページでメールアドレスを入力し、「認証メールを送信」ボタンをクリックしてください。<br>
								その後に受信したメール内にあるリンクをクリックしていただくことで会員登録画面にいきますので、会員登録を進めてください。<br>
								<br>
								②ソーシャルメディアのアカウントを使って登録 <br>
								Facebook,Google,Twitterの3つに対応しております。<br>
								新規会員登録ページで「○○アカウントでログインする」をクリックし、アプリ認証を許可した上で、ソーシャルメディアにログイン後、新規登録フォームのメールアドレス欄に、ソーシャルメディアに登録しているメールアドレスが自動的に反映されます。その他の項目を入力し新規登録を完了させてください。<br>'
							],[
								'ques' => 'CROFUNからのメールが届かない',
								'ans' => '弊社からのメールが、迷惑メールフォルダに入ってしまっているか、受信拒否になっている可能性がございます。
										迷惑メールフォルダに入っていた場合は、迷惑メールフォルダから通常のフォルダにメールを移動するようにしてください。'
							],[
								'ques' => 'パスワードを忘れてしまった場合',
								'ans' => 'こちらの<span><a href="'.route('user-reset-password-faq').'">リンク</a></span>よりパスワードの再設定を行ってください。<br>
										また、新規会員登録の際に設定したパスワードは、いつでもマイページの設定ページより変更することができますので、第三者に推測されにくいパスワードを設定しましょう。
										当社及び本サービスでは、お客様のアカウント（メールアドレス）及びパスワードの管理については関与しませんので予めご了承ください。'
							],[
								'ques' => 'プロフィール内容（ユーザー名、メールアドレス、パスワード、プロフィール画像等）を変更したい。',
								'ans' => 'トップページからログインしていただき、「マイページ」＞「アカウント情報」＞「プロフィール編集」から変更することが可能です。'
							],[
								'ques' => '退会方法について',
								'ans' => '退会に関しましては、ログイン後にマイページより退会の手続きを行うことができます。ご支援いただいたプロジェクトが目標金額に達していない場合でも、プロジェクトが成功すれば、支援手続きがおこなわれます。その際に、支援をキャンセルすることはできません。<br>
										退会されると、リターンの発送など実行者様からの重要なメッセージの送受信や確認などができなくなってしまいますので、充分にご注意ください。<br>
										また、一度退会されますと同メールアドレスでの登録はできませんのでご了承下さい。'
							]
						]
					],[
						'name' => 'クラウドファンディング用語説明について',
						'question' => [
							[
								'ques' => '資金調達者・商品提供者・資金提供者とは何ですか?',
								'ans' => '
								ここでは簡単に説明します。（詳しい定義は利用規約をご覧ください。）<br>
								起案者はプロジェクトを企画立案し資金調達をする人のことをいいます。<br>
								資金提供者はそのプロジェクトに共感し、資金を提供して支援をする人のことをいいます。<br>
								商品等提供者はポイントで選べるカタログギフトに商品を提供してくれる人のことをいいます。
								'
							],[
								'ques' => 'リターンとはなんですか？',
								'ans' => 'クラウドファンディングのプロジェクトへ資金を投じてくださった方に対してお返しとして設定しているものです。'
							],[
								'ques' => 'CROFUNポイントとは?',
								'ans' => 'CROFUN内で使えるポイントになります。ポイント数に応じてカタログギフトより任意の品と交換することができます。'
							],[
								'ques' => 'CROFUNカタログとは？',
								'ans' => 'CROFUNでは、独自の商品カタログをご用意しております。プロジェクトにご支援いただくと、設定されているCROFUNポイントを取得することができます。このポイントを使ってCROFUNカタログに記載されている商品と交換することが可能です。'
							]
						]
					]			
				]
			],[
				'category' => '起案者',
				'sub_category' => [
					[
						'name' => 'プロジェクト申し込みについて',
						'question' => [
							[
								'ques' => 'クラウドファンディングをしたいのですが、どのように申し込むのですか?',
								'ans' => '登録をしたのち、マイページの起案ページよりプロジェクトを立ち上げてください。<br>
								初めて立ち上げる方は公開前に、弊社より申込書・契約書が送られますので締結が必要となり、締結後、公開されます。
								'
							],[
								'ques' => '誰でも申し込むことはできますか?',
								'ans' => '個人・団体・年齢を問わずにプロジェクトのお申し込みを行うことが可能です。'
							],[
								'ques' => '審査の結果はいつわかりますか?',
								'ans' => '申請受付日より5営業日以内に、メールにて審査結果を連絡いたします。'
							],[
								'ques' => '海外在住でも申し込むことはできますか?',
								'ans' => '海外在住の方が資金調達者様でも特に問題はありませんが、支援金のお振込の口座は日本国内に限ります。'
							],[
								'ques' => '目標金額はどのように設定したらよいですか?',
								'ans' => 'プロジェクトの実施に必要な最低限の費用を設定することが望ましいです。是非、プロジェクト立ち上げに必要な最低費用を見積もってから目標金額の設定をしていただくようお願いいたします。'
							],[
								'ques' => '目標金額の設定に制限はありますか？',
								'ans' => '制限はございません。ですが、設定金額としては必要最低限の金額での設定をおすすめしております。'
							],[
								'ques' => '手数料はかかりますか?',
								'ans' => '目標金額以上に支援が集まらなかったとしてもCROFUNではダイレクト(即時支援)型方式を採用しておりますので、到達しなかったとしても集まった金額の一律5%（現在）を手数料としていただいております。'
							]
						]
					],[
						'name' => 'プロジェクト公開前について',
						'question' => [
							[
								'ques' => 'プロジェクトページに写真が挿入できません。',
								'ans' => 'データのサイズが5MB以上の画像を使用することはできません。5MB未満のサイズの画像をご使用ください。画像が挿入できない場合は、事務局までメールにてその画像をお送りください。ご対応させていただきます。'
							],[
								'ques' => 'まだ編集が完了していないのに、編集完了ボタンを押してしまいました。どうすればよいでしょうか。',
								'ans' => 'マイページにて再度編集することが可能となっております。'
							],[
								'ques' => 'プロジェクト起案ページにてPDFファイルを挿入しようとしたのですが、できません。どのような画像形式であれば挿入できるのでしょうか。',
								'ans' => 'PDFファイルを挿入することはできません。挿入できるファイルは、jpg, png, gif などの画像ファイルのみとなっております。動画に関しましては、Youtubeにアップロードした動画のみ，動画のリンクを貼れば埋め込むことが可能です。'
							],[
								'ques' => 'ページ内容を全部消してしまいました。',
								'ans' => 'お手数ですが、再度ページ内容を作成いただければ幸いです。'
							],[
								'ques' => 'リターンを消してしまいました。復元できますか？',
								'ans' => '復元することはできません。お手数ですが再度リターンを作成していただければ幸いです。'
							],[
								'ques' => 'プロジェクトページを編集し、申請の送信を行った後はどうすれば良いですか？',
								'ans' => '送信した時点でプロジェクト申請完了のメールが登録されているメールアドレスに送付されます。<br> 申請内容を事務局が確認し、承認がされると、再度メールが送付されますのでお待ち下さい。'
							],[
								'ques' => 'プロジェクトが成立しなかった場合、支援金やリターンはどうなりますか？',
								'ans' => 'CROFUNでは、ダイレクト(即時支援)型方式を採用しておりますので、支援総額が目標金額に1円でも満たなかった場合でもプロジェクトは成立となります。<br> ですので、リターンは必ず発送をしていただくようお願いしております。'
							],[
								'ques' => 'CROFUNポイントを設定する際の注意点はありますか?',
								'ans' => 'CROFUNでは、支援していただき集まった金額から手数料とポイント分の金額を差し引くこととなります。ポイントは1ポイント＝1円と考えていただき、無理のない範囲で設定してください。<br>
										あまりにもポイントのリターンが多いと資金が集まったとしても差し引いたらほとんど資金が残らないことになる可能性があります。ご注意ください。'
							]
						]
					],[
						'name' => 'プロジェクト公開中について',
						'question' => [
							[
								'ques' => 'プロジェクトの管理用ページにはどこから入ればよいでしょうか？',
								'ans' => 'CROFUNのホームページの右上にありますログインボタンよりご自身の設定されたメールアドレス、パスワードを入れていただき、まずはログインしていただきます。<br>
										ログイン後、マイページより入っていただき、「起案プロジェクト」から、管理用ページへ入ってください。'
							],[
								'ques' => 'リターンの内容を変更・追加したいのですが、どうすればよいでしょうか？',
								'ans' => '公開後、資金調達者様の管理画面からはリターンの編集ができなくなります。もしリターンの変更をご希望の場合は、変更内容を事務局までご連絡ください。<br>（原則、 公開後についてはリターンの「追加」のみ、ご対応を承ります。個別の条件等については、 事務局にお問い合わせください。）'
							],[
								'ques' => '振込先の銀行口座情報を変更したいのですが。',
								'ans' => '契約書に記載されている口座を変更する必要があります。<br> 変更されたい場合は事務局にご連絡ください。'
							]
						]
					],[
						'name' => 'プロジェクト終了時について',
						'question' => [
							[
								'ques' => 'プロジェクトが成立しなかった場合は何をすればよいでしょうか。',
								'ans' => 'プロジェクトが成立しないということはありませんが、目標金額に達しなかった場合でも、支援してくださった方へ感謝の言葉をお伝えすることをおすすめします。'
							],[
								'ques' => '集まったお金を使い切れなかったのですが、どうすればよいでしょうか。（例)イベントで人が集まらなかった等',
								'ans' => '事務局までお問い合わせください。'
							],[
								'ques' => '活動報告の投稿はどのように行えばよいでしょうか？',
								'ans' => 'マイページの「起案プロジェクト」タブから行ってください。<br> プロジェクトの終了報告をする場合は、「プロジェクト終了報告」より投稿してください。'
							]
						]
					],[
						'name' => 'その他',
						'question' => [
							[
								'ques' => '事務局に連絡を取りたいのですが、営業時間はいつでしょうか。',
								'ans' => 'CROFUN事務局の対応時間は平日の10時~18時となっております。<br> 土日祝日は対応しかねますので、平日にご連絡いただければ幸いです。
										また、メールでのお問い合わせを受け付けておりますが、土日祝日に送付された場合は、次の営業日までご連絡をすることができませんので予めご了承ください。'
							]
						]
					]
				]
			],[
				'category' => '商品提供者',
				'sub_category' => [
					[
						'name' => '商品掲載申し込みについて',
						'question' => [
							[
								'ques' => '商品掲載を申し込むにはどうすればよいでしょうか?',
								'ans' => '商品掲載をするためにはまずはCROFUNに会員登録をお願いいたします。<br>
　										会員登録の方法は「2.アカウント全般について」の「Q1.新規会員登録について」をご確認ください。'
							],[
								'ques' => '実際に商品掲載をする際にはどのような手続きが必要ですか?',
								'ans' => 'CROFUNの会員登録をしていただいた後にマイページの「商品登録」ページより、カタログに載せたい商品を登録します。<br>
　										商品登録ページの説明に沿って商品を登録を行ってください。その後、審査がございます。審査終了後、合否に関わらずご連絡いたします。'
							],[
								'ques' => '交換するためのCROFUNポイントはどのように設定すればよいですか?',
								'ans' => '基本的に1ポイント＝1円と考えます。カタログの商品がポイント交換されるときに、全体の交換ポイント数からシステム利用手数料5%（現在）を引かれます。<br>
								残った95%のポイント数が金額に換算され、ご登録いただいた入金先口座へと入金されます。手数料が差し引かれることを想定してポイント数を高く設定することは問題ございませんのでご自身の商品に合ったポイントを設定ください。'
							],[
								'ques' => '商品写真がアップロードできません。',
								'ans' => 'データのサイズが5MB以上の画像を使用することはできません。5MB未満のサイズの画像をご使用ください。画像が挿入できない場合は、事務局までメールにてその画像をお送りください。ご対応させていただきます。'
							],[
								'ques' => '商品として掲載してはいけないものはありますか?',
								'ans' => '生ものや食料品の場合は、梱包や郵送方法に十分配慮がなされていることが前提となります。また、下記商品は掲載が不可となっております。<br>
										・偽ブランド品、正規品と確証のないもの <br>
										・知的財産権を侵害するもの <br>
										・盗難品など不正な経路で入手した商品 <br>
										・犯罪や違法行為に使用されるまたはそのおそれのあるもの <br>
										・危険物や安全性に問題があるもの <br>
										・18禁、アダルト、児童ポルノ関連 <br>
										・医薬品、医療機器 <br>
										・現金、生き物 <br>

										これらを掲載していた場合、法律で罰せられる可能性もございますので掲載は不可となっております。'
							],[
								'ques' => '登録する入金口座はどの銀行でも構いませんか?',
								'ans' => '入金口座につきましては地方銀行、ゆうちょ銀行、ネットバンクなどどの銀行でも対応しております。ご自身名義の口座をご登録ください。名義が違っている場合には、集まった金額をご入金できませんので予めご了承ください。'
							],[
								'ques' => '掲載申請後、何日くらいで商品がカタログに掲載されますか?',
								'ans' => '商品の掲載申請をいただき、審査の合格通知が届いてから、問題がなければ3営業日以内にカタログに掲載されます。
										申請いただいた商品に何らかの不備があった場合にはメールにて掲載不可のお知らせをさせていただきますので、不備項目をご確認の上、再度、掲載申請を行ってください。'
							]
						]
					],[
						'name' => '商品掲載中について',
						'question' => [
							[
								'ques' => '掲載中の商品の情報（交換ポイント数や内容など）は変更できますか?',
								'ans' => '大変お手数をおかけしますが、一度ご登録いただいた商品は事務局で確認する関係上、お客様が情報を変更することはできません。再度、情報を変更したものを登録してください。'
							],[
								'ques' => '商品の発送方法の指定はありますか?',
								'ans' => '商品の発送方法には特に指定はございません。ですが、事前に設定した注文が来てから何日以内に発送を行うという日にちを超えることはないようにしてください。'
							]
						]
					],[
						'name' => '商品掲載終了時について',
						'question' => [
							[
								'ques' => '商品の掲載を終了したいときはどうすればよいですか?',
								'ans' => ' 登録している商品が他のユーザーの購入処理中の場合などがあるため、確認してから掲載終了にする関係上、登録した本人が自由に掲載終了にすることができません。お手数ですが、事務局にて掲載終了の手続きをさせていただきますので、商品の掲載を終了したい場合には早めに事務局までご連絡ください。'
							],[
								'ques' => '商品の掲載期限はありますか?',
								'ans' => '基本的には掲載終了の申請を事務局に送付いただくまでは半永久的に商品は掲載されます。販売中止になったなどありましたら必ず事務局まで掲載終了のご連絡をください。
　										また、退会されますと掲載されているすべての商品を掲載終了とさせていただきます。誤って退会しないようにご注意ください。'
							]
						]
					]
				]
			],[
				'category' => '支援者',
				'sub_category' => [
					[
						'name' => '支援方法について',
						'question' => [
							[
								'ques' => '支援方法はなにがありますか?',
								'ans' => 'クレジッカード決済(JCB/Master/VISA/American Express/Diners)のみご利用可能です。'
							],
							[
								'ques' => 'カード決済で支援した場合、いつ引き落とされるのでしょうか？',
								'ans' => 'CROFUNでは、ダイレクト(即時支援)型方式を採用しておりますので、ご支援いただいた時点で決済されます。'
							],
							[
								'ques' => 'プロジェクトの支援状況を確認できますか?',
								'ans' => 'トップページからログインしていただき、「マイページ」の「支援プロジェクト」タブより支援状況を確認することができます。'
							],
							[
								'ques' => '資金調達者の方へメッセージを送れますか?',
								'ans' => 'ログイン後、マイページの「支援プロジェクト」タブよりメッセージを送付したいプロジェクトを選択します。「クリエイターにメッセージを送る」ボタンをクリックしてメッセージを送ることができます。※ログイン状態でないと「メッセージを送る」のリンクが表示されませんのでご注意ください。'
							],
							[
								'ques' => '法人でも支援できますか?',
								'ans' => '法人様のご名義でもご支援いただけます。'
							],
							[
								'ques' => '海外から支援できますか?',
								'ans' => '海外発行のカードでもご支援は可能となっております。ですが、プロジェクトによっては、リターンの海外発送をしていただけないものもございますので、もしプロジェクトページ等に明示されていない場合は、先に資金調達者様にお問い合わせいただくことをおすすめします。'
							],
							[
								'ques' => '支援した際に保存したクレジットカード情報の削除はどうすればできますか?',
								'ans' => ' CROFUNはクレジットカード情報を入力する際に外部のGMOペイメントゲートウェイ社の決済用ページを使用しており、CROFUNはクレジットカード情報を記録、保持しておりません。お客様のお使いのブラウザ画面に過去の入力が残っているのは、ブラウザの設定で消していただくことになりますので、ご了承ください。'
							],
						]
					],[
						'name' => '支援後について',
						'question' => [
							[
								'ques' => 'お届け先住所を変更できますか?',
								'ans' => '【ご支援いただいたプロジェクトが募集中の場合】変更可能です。<br>
								「マイページ」＞「配送先情報」から変更いただくことができます。<br>
								【ご支援いただいたプロジェクトの募集が終了している場合】<br>
								終了してしまうと、終了時点の配送先情報が起案者に通知されます。そのため住所変更が反映されない場合があります。<br>
								お手数ですが直接、起案者の方へお問い合わせ下さい。「マイページ」の「支援プロジェクト」タブを開き、該当プロジェクトから「クリエイターにメッセージを送る」ボタンから直接お問い合わせいただけます。'
							],[
								'ques' => '追加の支援のお届け先を変えたいです。どうすればよいでしょうか？',
								'ans' => '追加支援する際の購入確認画面からお届け先住所を変更してください。'
							],[
								'ques' => '支援の内容を変更したいです。',
								'ans' => '【プロジェクトが成立前の場合】決済方法やリターンの種類・個数を変更することはできないため、一度キャンセルを行い、新たに希望の内容のご支援を行ってください。
										【プロジェクトが成立後の場合】キャンセルすることができないため、ご支援の内容を変更することはできません。'
							],[
								'ques' => '領収書の発行はできますか?',
								'ans' => ' 基本はカード会社にお金を払うためカード会社からの明細書が領収書となります。寄付型のクラウドファンディングは、起案者様と支援者様の間の契約であるため、弊社から支援者様に書面の発行は出来かねます。資金調達者様へお問い合わせいただき、書面の発行をご依頼ください。'
							],[
								'ques' => 'クレジットカードを変更することはできますか？',
								'ans' => 'すでにご支援いただいたものについてはクレジットカードを変更することはできません。一度キャンセルをし、再度ご支援いただく際に異なるクレジットカードを使用してください。'
							],[
								'ques' => 'プロジェクトが成立しなかった場合、それまでに集まった金額はどうなりますか?',
								'ans' => ' CROFUNではダイレクト型(即時支援)方式を採用しておりますので、プロジェクトが成立しないといった状況はございません。<br>
								ですので、目標金額にかかわらず、期限までに集まった金額が起案者様に支払われ、支援者様に返金はされません。'
							],[
								'ques' => '支援したプロジェクトが成立しなかった場合、いつ返金されますか？',
								'ans' => 'ご支援いただいた時点でプロジェクトは成立となりますので原則返金も発生いたしません。'
							],[
								'ques' => '支援したリターンに関して質問などがある場合について',
								'ans' => 'マイページよりプロジェクトの起案者様に直接お問い合わせいただけますようお願い申し上げます。<br>
										マイページ（ご自身のユーザー情報が記載されているページ）→支援プロジェクト→クリエイターにメッセージを送る　からご利用いただけます。'
							],[
								'ques' => 'リターンの受け取り（お届け予定など）について',
								'ans' => 'プロジェクトによってリターンの発送（履行）時期は、リターンの商品内容により異なります。リターン毎に設定されている「お届け予定日」をご確認ください。<br>
										もしプロジェクトオーナーからリターンに関するメッセージがない場合や、お届け日予定日を越えてもリターンが届かない場合は、ログインした状態でご支援いただいたプロジェクトページにある「メッセージで意見や質問を送る」というリンクよりメッセージを送って直接プロジェクトオーナーへお尋ねください。<br>
										また、転居などによりお届け先の住所に変更がある場合は、「マイページ」の「支援プロジェクト」タブを開き、お届け先の確認・変更を行っていただけます。しかし、プロジェクトオーナーが既にリターンの発送を完了している場合は、変更できませんので、上記と同様にプロジェクトオーナーにお尋ねください。'
							]
						]
					],[
						'name' => '支援時のトラブルについて',
						'question' => [
							[
								'ques' => 'クレジットカードで同一プロジェクトに多重に支援ができてしまった場合',
								'ans' => '弊社からのお願いと致しまして、クレジットカードでのご支援時にエラーなどが確認できた場合は、その時点でお申込みを一旦中止のうえでお問い合わせいただけますと幸いです。<br>
										(※通信サービスではご利用環境や操作状況などによって、何かしらの予期せぬ不具合が発生してしまう可能性がございます。) <br>
										【多重に支援が確認できてしまった場合について】<br>
										お手数をお掛けし大変申し訳ございませんが、決済システム上で不具合などがなかったか調査させて頂きますので、下記内容をご教示のうえ、お問い合わせフォームからご連絡いただけますようお願い申し上げます。<br>
										①ご利用のクレジットカードの種類（例：VISA / JCBなど）<br>
										②ご支援時の具体的な操作手順 <br>
										③具体的なエラーメッセージの内容 <br>
										④具体的なエラー発生のタイミングと発生箇所 <br>
										⑤再度ご支援いただいた際の具体的な画面上の操作手順および画面遷移(例：一旦トップページに戻った、など) <br>
										⑥ご利用の端末(PCやスマートフォンなど) <br>
										⑦端末のOS（Windows / Macなど）<br>
										⑧ご利用のブラウザ（Internet explorer / Google Chromeなど）<br>
										⑨ブラウザのバージョン'
							]
						]
					]
				]
			]
			

		];

		//dd($data);
	?>


	<?php 
	$i=0;
	foreach($data as $d){?>


			<div class="row">
				<div class="col">
					<h4 class="green">{{$d['category']}}</h4>
					<div class="divider green"></div>
				</div>
			</div>
			
			<?php 
			$j=0;
			foreach($d['sub_category'] as $sc){?>
			<p>
			  <a class="black-text" data-toggle="collapse" href="#collapseExample{{$i.$j}}" aria-expanded="false" aria-controls="collapseExample{{$i.$j}}">
			    <i class="fa fa-arrow-circle-down"></i> {{$sc['name']}}
			  </a>
			</p>
			<div class="collapse" id="collapseExample{{$i.$j}}">
			  <div class="card card-block no-border">
			    		
			    	<?php 
			    	$k=0;
			    	foreach($sc['question'] as $q){?>	

			  		<p>
					  <a class="black-text" data-toggle="collapse" href="#collapseExample{{$i.$j.$k}}" aria-expanded="false" aria-controls="collapseExample{{$i.$j.$k}}">
					    Q{{$k+1}}. {{$q['ques']}}
					  </a>
					</p>
					<div class="collapse" id="collapseExample{{$i.$j.$k}}">
					  <div class="card card-block no-border">
					  <?php
							$x = $k+1;
							$text = $q['ans'];
							$tag = '<p>'.'A'.$x.'. '.$text.'</p>';
						?>
					    {!! $tag !!}
					  </div>
					</div>

					<?php $k++;}?>

			  </div>
			</div>



	<?php $j++;}$i++;}?>

	
		</div>
	</div>
</div>

@stop

@section('custom_js')
@stop