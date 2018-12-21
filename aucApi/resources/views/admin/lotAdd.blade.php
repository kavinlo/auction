<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>拍品新增</title>
    <link rel="stylesheet" href="/layui/css/layui.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_974806_2viftdeej8k.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-lg12">
            <fieldset class="layui-elem-field">
                <legend>拍品管理 - 新增拍品</legend>
                <div class="layui-field-box">
                    <form class="layui-form" action="/admin/lotAddHandle">
                        <div class="layui-form-item">
                            <label class="layui-form-label">拍品名</label>
                            <div class="layui-input-block">
                                <input type="text" name="lotName" required lay-verify="required" placeholder="请输入拍品名"
                                       autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">拍品底价</label>
                            <div class="layui-input-inline">
                                <input type="text" name="lotPrice" required lay-verify="required"
                                       onkeyup="this.value=this.value.replace(/\D/g,'')"
                                       onafterpaste="this.value=this.value.replace(/\D/g,'')"
                                       placeholder="请输入底价" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">元</div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">加价幅度</label>
                            <div class="layui-input-inline">
                                <input type="text" name="range" required lay-verify="required"
                                       onkeyup="this.value=this.value.replace(/\D/g,'')"
                                       onafterpaste="this.value=this.value.replace(/\D/g,'')"
                                       placeholder="请输入加价幅度" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">元</div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">开拍时间</label>
                            <div class="layui-input-inline">
                                <input type="date" name="date" required lay-verify="required"
                                       placeholder="请输入日期" autocomplete="off" class="layui-input">
                                <input type="time" name="datetime" required lay-verify="required"
                                       placeholder="请输入时间" autocomplete="off" class="layui-input">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">拍卖时长</label>
                            <div class="layui-input-block">
                                <select name="timeLength" lay-verify="required">
                                    <option value=""></option>
                                    <option value="5">5分钟</option>
                                    <option value="120">2小时</option>
                                    <option value="2880">2天</option>
                                    <option value="43200">一个月</option>
                                </select>
                            </div>
                        </div>


                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">拍品描述</label>
                            <div class="layui-input-block">
                                <textarea name="lDescription" placeholder="请输入内容" class="layui-textarea"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="formDemo">下一步</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                    </form>
                </div>
            </fieldset>
        </div>

    </div>
</div>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/layui/layui.js"></script>
<script type="text/javascript" src="/js/dw_form_submit.js"></script>
</body>
</html>