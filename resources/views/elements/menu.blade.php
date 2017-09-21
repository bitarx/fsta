            <ul>
                @if (controllerName() == 'ContactController')
                    <li><a href="/#"><strong>Top</strong></a></li>
                    <li><a href="/#desc"><strong>ふりスタとは</strong></a></li>
                    <li><a href="/#fee"><strong>指導料金</strong></a></li>
                    <li><a href="/#format"><strong>指導形式</strong></a></li>
                    <li><a href="/#case"><strong>合格実績</strong></a></li>
                    <li><a href="/#access"><strong>アクセス</strong></a></li>
                    <li><a href="/contact"><strong>お問い合わせ</strong></a></li>
                @else
                    <li><a href="#"><strong>Top</strong></a></li>
                    <li><a href="#desc"><strong>ふりスタとは</strong></a></li>
                    <li><a href="#fee"><strong>指導料金</strong></a></li>
                    <li><a href="/#format"><strong>指導形式</strong></a></li>
                    <li><a href="#case"><strong>合格実績</strong></a></li>
                    <li><a href="#access"><strong>アクセス</strong></a></li>
                    <li><a href="/contact"><strong>お問い合わせ</strong></a></li>
                @endif
            </ul>
