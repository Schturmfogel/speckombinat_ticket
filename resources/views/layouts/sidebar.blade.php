<ul class="nav nav-sidebar">
    <li {{ Route::current()->uri == 'home/{tab}' || Route::current()->uri == 'home' ? 'class=active':'' }}><a href="/home">Заявки</a></li>
    <li {{ Route::current()->uri == 'dashboard' ? 'class=active':''}}><a href="/dashboard">Мои</a></li>
    <li {{ Route::current()->uri == 'ticket/create' ? 'class=active':''}}><a href="/ticket/create">Создать</a></li>
    <li {{ Route::current()->uri == 'tickets' ? 'class=active':''}}><a href="/tickets">Архив</a></li>
</ul>
<ul class="nav nav-sidebar">
    <li {{ Route::current()->uri == 'categories' ? 'class=active':''}}><a href="/categories">Категории</a></li>
    <li {{ Route::current()->uri == 'users' ? 'class=active':''}}><a href="/users">Пользователи</a></li>
</ul>
