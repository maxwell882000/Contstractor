<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item ">
            <a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.index"))1 @else 0 @endif" href="{{route("admin.index")}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Главная</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Home</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.home.main_banner_show"))1 @else 0 @endif" href="{{route("admin.home.main_banner_show")}}">Главный Баннер</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.home.banner_show_list"))1 @else 0 @endif" href="{{route("admin.home.banner_show_list")}}">Остальные
                            Баннеры</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.home.welcome_home_show_list"))1 @else 0 @endif" href="{{route("admin.home.welcome_home_show_list")}}">Приветствие</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.home.comments_show_list"))1 @else 0 @endif" href="{{route("admin.home.comments_show_list")}}">Комментарии</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.home.desc_before_card_show"))1 @else 0 @endif" href="{{route("admin.home.desc_before_card_show")}}">Описание перед
                            картой</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
               aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">O компании</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.about_us.begin_banner_show"))1 @else 0 @endif" href="{{route("admin.about_us.begin_banner_show")}}">Начальный баннер</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.about_us.company_about_show_list"))1 @else 0 @endif" href="{{route("admin.about_us.company_about_show_list")}}">Описания
                            компании</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.about_us.persons_show_list"))1 @else 0 @endif" href="{{route("admin.about_us.persons_show_list")}}">Работники</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.about_us.hotline_show"))1 @else 0 @endif" href="{{route("admin.about_us.hotline_show")}}">Hotline</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Галерея</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.gallery.begin_banner_show"))1 @else 0 @endif" href="{{route("admin.gallery.begin_banner_show")}}">Начальный баннер</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.gallery.category_show_list"))1 @else 0 @endif" href="{{route("admin.gallery.category_show_list")}}">Категории для галереи</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.gallery.images_show_list"))1 @else 0 @endif" href="{{route("admin.gallery.images_show_list")}}">Картинки</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Шоп Галерея</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.shop_gallery.begin_banner_show"))1 @else 0 @endif" href="{{route("admin.shop_gallery.begin_banner_show")}}">Начальный баннер</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.shop_gallery.category_show_list"))1 @else 0 @endif" href="{{route("admin.shop_gallery.category_show_list")}}">Категория для шоп
                            галереи</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.shop_gallery.images_show_list"))1 @else 0 @endif" href="{{route("admin.shop_gallery.images_show_list")}}">Товары</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#connection" aria-expanded="false"
               aria-controls="connection">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Cпособы связи</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="connection">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.contact_us.begin_banner_show"))1 @else 0 @endif" href="{{route("admin.contact_us.begin_banner_show")}}">Начальный баннер</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.contact_us.address_show"))1 @else 0 @endif" href="{{route("admin.contact_us.address_show")}}">Аддресс</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.contact_us.phone_number_show"))1 @else 0 @endif" href="{{route("admin.contact_us.phone_number_show")}}">Номера телефонов</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.contact_us.email_show"))1 @else 0 @endif" href="{{route("admin.contact_us.email_show")}}">Email</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.contact_us.form_send_text_show"))1 @else 0 @endif" href="{{route("admin.contact_us.form_send_text_show")}}">Форма отправка сообщений</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Общие настройки</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.common.common_show"))1 @else 0 @endif" href="{{route("admin.common.common_show")}}">Титулка и Iframe maps</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.common.logo_show"))1 @else 0 @endif" href="{{route("admin.common.logo_show")}}">Лого</a></li>
{{--                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.common.map_show"))1 @else 0 @endif" href="{{route("admin.common.map_show")}}">Карты</a></li>--}}
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.common.styles_show"))1 @else 0 @endif" href="{{route("admin.common.styles_show")}}">Стили</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.common.sponsor_show_list"))1 @else 0 @endif" href="{{route("admin.common.sponsor_show_list")}}">Спонсоры</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.common.header_show_list"))1 @else 0 @endif" href="{{route("admin.common.header_show_list")}}">Header</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#footer" aria-expanded="false" aria-controls="footer">
                <i class="icon-plus menu-icon"></i>
                <span class="menu-title">Footer</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="footer">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.footer.featured_links_show_list"))1 @else 0 @endif" href="{{route("admin.footer.featured_links_show_list")}}">Featured Links</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.footer.instagram_feed_show_list"))1 @else 0 @endif" href="{{route("admin.footer.instagram_feed_show_list")}}">Instagram Feed</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.footer.follow_show_list"))1 @else 0 @endif" href="{{route("admin.footer.follow_show_list")}}">Follow Us</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.footer.keep_in_touch_show"))1 @else 0 @endif" href="{{route("admin.footer.keep_in_touch_show")}}">Keep in Touch</a></li>
                    <li class="nav-item"><a class="nav-link" isActive="@if(\Illuminate\Support\Facades\Route::is("admin.footer.left_most_text_show"))1 @else 0 @endif" href="{{route("admin.footer.left_most_text_show")}}">Текст Слева</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

