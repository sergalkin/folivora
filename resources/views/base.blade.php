@extends('layouts.basic')

@section('content')
    <section>
        <div class="tumbnail"></div>
        <article class="text-wrapper">
            <h1 class="article-name">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio,
                voluptatem.</h1>
            <h2 class="paragraph-header">Design</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem cum dolorum ea illo maxime
                necessitatibus odit possimus reprehenderit similique?</p>
            <h2 class="paragraph-header">Development</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem cum dolorum ea illo maxime
                necessitatibus odit possimus reprehenderit similique?</p>
            <h2 class="paragraph-header">Branding</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem cum dolorum ea illo maxime
                necessitatibus odit possimus reprehenderit similique?</p>
        </article>
    </section>
    <section class="works">
        <h2>Works</h2>
        <div class="flex-cards">
            <div class="card">
                <a href="">
                    <img src="{{asset('images/work1.png')}}" alt="Фото 1">
                </a>
                <div class="card-info">
                    <h3>Lorem.</h3>
                    <p>Lorem ipsum.</p>
                </div>
                <div class="over"></div>
            </div>
            <div class="card">
                <a href="">
                    <img src="{{asset('images/work2.png')}}" alt="Фото 2">
                </a>
                <div class="card-info">
                    <h3>Lorem.</h3>
                    <p>Lorem ipsum.</p>
                </div>
                <div class="over"></div>
            </div>
            <div class="card">
                <a href="">
                    <img src="{{asset('images/work3.png')}}" alt="Фото 3">
                </a>
                <div class="card-info">
                    <h3>Lorem.</h3>
                    <p>Lorem ipsum.</p>
                </div>
                <div class="over"></div>
            </div>
            <div class="card">
                <a href="">
                    <img src="{{asset('images/work4.png')}}" alt="Фото 4">
                </a>
                <div class="card-info">
                    <h3>Lorem.</h3>
                    <p>Lorem ipsum.</p>
                </div>
                <div class="over"></div>
            </div>
            <div class="card">
                <a href="">
                    <img src="{{asset('images/work5.png')}}" alt="Фото 5">
                </a>
                <div class="card-info">
                    <h3>Lorem.</h3>
                    <p>Lorem ipsum.</p>
                </div>
                <div class="over"></div>
            </div>
            <div class="card">
                <a href="">
                    <img src="{{asset('images/work6.png')}}" alt="Фото 6">
                </a>
                <div class="card-info">
                    <h3>Lorem.</h3>
                    <p>Lorem ipsum.</p>
                </div>
                <div class="over"></div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="text-wrapper">
            <h2>Blog</h2>
            <article>
                <img src="{{asset('images/img2.png')}}" alt="Картинка" class="preview-image">
                <h3>Lorem ipsum dolor sit amet</h3>
                <div class="post-date">
                    <p class="date">20</p>
                    <p class="year">May,</p>
                    <p class="author">Balabl</p>
                </div>
                <p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam animi
                    consequatur deleniti
                    deserunt dignissimos eos exercitationem iste laboriosam magni modi, nostrum obcaecati pariatur
                    porro quae ratione repudiandae totam unde.</p>
                <div class="btn-read"><a href="#" class="button-blog">Read more &nbsp;&rightarrow;</a></div>
            </article>
            <article>
                <img src="{{asset('images/img3.png')}}" alt="Картинка" class="preview-image">
                <h3>Lorem ipsum dolor sit amet</h3>
                <div class="post-date">
                    <p class="date">20</p>
                    <p class="year">May,</p>
                    <p class="author">Balabl</p>
                </div>
                <p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam animi
                    consequatur deleniti
                    deserunt dignissimos eos exercitationem iste laboriosam magni modi, nostrum obcaecati pariatur
                    porro quae ratione repudiandae totam unde.</p>
                <div class="btn-read"><a href="#" class="button-blog">Read more &nbsp;&rightarrow;</a></div>
            </article>
        </div>
    </section>
@endsection