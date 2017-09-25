@extends('layouts.master')

@section('content')
<div id="wrapper">
    <div id="inquery">
        <section>
            <article class="content">
                <header>
                    <h2 class="title"><span>お問い合わせ</span></h2>
                </header>
            </article>
        </section>

        <section class="inquery" id="inquery">
            <form id="inqueryForm">
                <dl>
                    <dt>お名前<br></dt>
                    <dd><input type="text" id="name"></dd>
                    <dt>Eメール(必須)</dt>
                    <dd><input type="text" id="mail"></dd>
                    <dt>自由記述欄</dt>
                    <dd><textarea name="" id="message" cols="30" rows="10"></textarea></dd>
                </dl>
                <span class="errorMes" id="error"></span>
                <span class="successMes" id="success"></span>
                <div class="submit"><input type="submit" value="送信" /></div>
            </form>
        </section>
    </div>
    <!-- / content -->
</div>
<!-- / wrapper -->
@endsection
