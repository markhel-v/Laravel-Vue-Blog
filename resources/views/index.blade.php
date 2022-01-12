<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>IHVH</title>
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uikit-rtl.min.css') }}">
</head>
<body>


<div id="app">
    <v-header></v-header>
    <main style="margin-top: 30px;">
        <div class="uk-container">
            <router-view></router-view>
        </div>
    </main>
</div>
<script src="{{ asset('assets/js/uikit.min.js') }}"></script>
<script src="{{ asset('assets/js/uikit-icons.min.js') }}"></script>
<script src="/js/app.js"></script>
</body>
</html>



