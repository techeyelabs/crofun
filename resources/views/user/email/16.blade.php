@extends('layouts.email')
@section('content')

<!-- <p>株式会社{{$data['name']}}</p> -->
<div>{{$data['name']}} 様</div>
<br>
<div>Crofun運営局です。</div>
<br>
<div>先日は、お忙しい中、</div>
<div>プロジェクト申請をお送りいただき、ありがとうございました。</div>
<br>
<div>厳正なる選考の結果、誠に残念ではございますが、</div>
<div>今回は掲載を見合わせていただくことになりました。</div>
<br>
<div>ご希望に添えず恐縮ですが、何卒ご了承くださいますよう</div>
<div>お願い申し上げます。</div>
<br>
<div>多数のクラウドファンディングの中からCrofunに</div>
<div>応募いただきましたことに感謝するとともに、</div>
<div>{{$data['name']}}様の、より一層のご活躍をお祈り申し上げます。</div>
<br>

@endsection    