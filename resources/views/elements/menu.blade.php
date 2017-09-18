            <ul>
                @if (controllerName() == 'ContactController')
                    <li><a href="/#"><strong>Top</strong></a></li>
                    <li><a href="/#post-51"><strong>会社概要</strong></a></li>
                    <li><a href="/#post-52"><strong>事業案内</strong></a></li>
                    <li><a href="/#post-53"><strong>実績紹介</strong></a></li>
                    <li><a href="/#post-54"><strong>アクセス</strong></a></li>
                    <li><a href="/contact"><strong>お問い合わせ</strong></a></li>
                @else
                    <li><a href="#"><strong>Top</strong></a></li>
                    <li><a href="#post-51"><strong>会社概要</strong></a></li>
                    <li><a href="#post-52"><strong>事業案内</strong></a></li>
                    <li><a href="#post-53"><strong>実績紹介</strong></a></li>
                    <li><a href="#post-54"><strong>アクセス</strong></a></li>
                    <li><a href="/contact"><strong>お問い合わせ</strong></a></li>
                @endif
            </ul>
