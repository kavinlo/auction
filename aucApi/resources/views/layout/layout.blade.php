<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>闲心 后台管理</title>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">闲心 后台管理</div>

        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="http://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" class="layui-nav-img">
                    贤心
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item"><a class="layui-this" href="/admin/successLogin">控制台</a></li>

                {{--<li class="layui-nav-item">--}}
                {{--<a href="javascript:;">权限管理</a>--}}
                {{--<dl class="layui-nav-child">--}}
                {{--<dd><a href="rule.html">规则列表</a></dd>--}}
                {{--<dd><a href="role.html">角色列表</a></dd>--}}
                {{--<dd><a href="adminRole.html">用户角色</a></dd>--}}
                {{--</dl>--}}
                {{--</li>--}}
                <li class="layui-nav-item">
                    <a href="javascript:;">会员管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/admin/memberList">会员列表</a></dd>
                    </dl>
                </li>

                <li class="layui-nav-item">
                    <a href="javascript:;">拍品管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/admin/lotList">拍品列表</a></dd>
                    </dl>
                </li>


            </ul>
        </div>
    </div>

    @yield('content')



    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © layui.com - 底部固定区域
    </div>
</div>

</body>
</html>