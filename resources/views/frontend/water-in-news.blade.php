@extends('frontend.layouts.master')
@section('title','Water In News')
@section('content')
<!--start news section-->
<section class="water-news clearfix py-5">
    <div class="container">
        <div class="news-box mb-4">
            <div class="row">
                <div class="col-md-5">
                    <div class="news-img">
                        <img src="{{asset('frontend')}}/images/fb_share.png" class="img-fluid" alt="image">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="news-description">
                        <h5 class="text-primary font-weight-bold">দেশীয় মাছ ও শামুক উন্নয়ন প্রকল্প জেলা কর্মকর্তাদের জন্য এসি কেনার প্রস্তাব টেলিভিশন, ডিএলএসআর স্টুডিও ক্যামেরা ক্রয়; মেরামত করা হবে মৎস্য অফিসের দেয়ালও * বিলাসী ব্যয় থামাতেই হবে -ড. জাহিদ হোসেন * এসব ব্যয় নিয়ন্ত্রণের চেষ্টা চলছে -পরিকল্পনামন্ত্রী</h5>
                        <p class="text-muted news-date" style="font-size: 18px;">
                            5 Sep 2020
                        </p>
                        <p class="text-muted news-desc">কোভিড-১৯ মহামারীর কারণে উন্নয়ন প্রকল্পে বিলাসী ব্যয়ে লাগাম টানতে তৎপরতা চালাচ্ছে সরকার। কিন্তু এ ধরনের ব্যয় প্রস্তাব থামছেই না। ‘দেশীয় প্রজাতির মাছ এবং শামুক সংরক্ষণ ও উন্নয়ন’ প্রকল্পের কর্মকর্তাদের জন্য ১১টি এসি কেনার প্রস্তাব করেছে মৎস্য অধিদফতর। সেই সঙ্গে প্রকল্পটির আওতায় জেলা মৎস্য দফতর মেরামত, সীমানা প্রাচীর মেরামতের কাজও যুক্ত করা হয়েছেে</p>
                        <div class="news-read-more text-right">
                            <a style="display: inline-block;" class="btn btn-primary" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-box mb-4">
            <div class="row">
                <div class="col-md-5">
                    <div class="news-img">
                        <img src="{{asset('frontend')}}/images/1598534374_09.jpg" class="img-fluid" alt="image">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="news-description">
                        <h5 class="text-primary font-weight-bold">সুস্থতার জন্য পানি</h5>
                        <p class="text-muted news-date" style="font-size: 18px;">
                            5 Sep 2020
                        </p>
                        <p class="text-muted news-desc">তৃষ্ণায় শান্তিলাভের জন্য তো বটেই, সার্বিক সুস্থ থাকার জন্য প্রতিটি মানুষের পানির প্রয়োজনীয়তা অপরিসীম। শরীরের প্রতিটি অঙ্গ-প্রত্যঙ্গের সঞ্চালন স্বাভাবিক রাখার জন্য পানির বিকল্প নেই। প্রবাদ আছে, পানিতে পানি বাধে। ওজনের বেশির ভাগটাই যেহেতু পানির সেহেতু শরীর ঠিক রাখতে পানি হল অন্যতম উপাদান। প্রতিদিন পর্যাপ্ত পরিমাণে পানি খেতে হবে প্রত্যেককে। শিশু হোক কিংবা বৃদ্ধ- এর অন্যথা হওয়ার জোর নেই। যদিও ঋতুবেধে পানির চাহিদা কিছু কম-বেশি হয়। গরমের সময় ঘাম বেশি হয় বলে যে পরিমাণে পানি খাওয়া দরকার, শীতে ততটা নয়। কারণ শীতে ঘাম</p>
                        <div class="news-read-more text-right">
                            <a style="display: inline-block;" class="btn btn-primary" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end news section-->
@endsection
