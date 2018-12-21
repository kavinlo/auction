//js显示插入属性表单
function insertAttri(val) {
    var str = '\n' +
        '        <div class="layui-col-lg12">\n' +
        '            <fieldset class="layui-elem-field">\n' +
        '                <legend>拍品管理 - 拍品属性</legend>\n' +
        '                <div class="layui-field-box">\n' +
        '                    <form class="layui-form" action="/admin/attrHandle" enctype="multipart/form-data">\n' +
        '                        <div class="layui-form-item">\n' +
        '                            <label class="layui-form-label">拍品名</label>\n' +
        '                            <div class="layui-input-block">\n' +
        '                                <input type="text" name="lotName" required lay-verify="required" readonly="readonly" value="' + val['lotName'] + " - " + val['id'] + '" style="width: 50%;"\n' +
        '                                       autocomplete="off" class="layui-input">\n' +
        '                            </div>\n' +
        '                        </div>\n' +
        '\n' +
        '                        <div class="formAttri">\n' +
        '\n' +
        '                            <div class="layui-form-item">\n' +
        '                                <label class="layui-form-label">拍品属性</label>\n' +
        '                                <div class="layui-input-inline">\n' +
        '                                    <input type="text" name="attrName[]" required lay-verify="required"\n' +
        '                                           placeholder="请输入属性" autocomplete="off" class="layui-input">\n' +
        '                                </div>\n' +
        '\n' +
        '                                <label class="layui-form-label">属性值</label>\n' +
        '                                <div class="layui-input-inline">\n' +
        '                                    <input type="text" name="attrVal[]" required lay-verify="required"\n' +
        '                                           placeholder="请输入属性值" autocomplete="off" class="layui-input">\n' +
        '                                </div>\n' +
        '                            </div>\n' +
        '\n' +
        '                        </div>\n' +
        '\n' +
        '                        <div class="layui-form-item">\n' +
        '                            <div class="layui-input-block">\n' +
        '                                <i class="iconfont icon-plus" onclick="addAttriForm()"></i>\n' +
        '                            </div>\n' +
        '                        </div>\n' +
        '\n' +
        '                        <div class="layui-form-item">\n' +
        '                            <label class="layui-form-label">拍品图片</label>\n' +
        '                            <div class="layui-input-block">\n' +
        '                                <input type="file" multiple="multiple" class="imgUrl" name="imgUrl" required lay-verify="required" style="width: 50%;"\n' +
        '                                       autocomplete="off" class="layui-input">\n' +
        '                            </div>\n' +
        '                        </div>\n' +
        '\n' +
        '                        <div class="layui-form-item">\n' +
        '                            <div class="layui-input-block">\n' +
        '                                <button class="layui-btn" lay-submit lay-filter="formDemo">提交</button>\n' +
        '                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>\n' +
        '                            </div>\n' +
        '                        </div>\n' +
        '\n' +
        '                    </form>\n' +
        '                </div>\n' +
        '            </fieldset>\n' +
        '        </div>'
    $('.layui-row').html(str)

}

//change事件 图片地址处理
let img = ''
$(document).on('change', '.imgUrl', function () {
    img = this.files
})

// 点击增加属性框
function addAttriForm() {
    var str = '                            <div class="layui-form-item">\n' +
        '                                <label class="layui-form-label">拍品属性</label>\n' +
        '                                <div class="layui-input-inline">\n' +
        '                                    <input type="text" name="attrName[]" required lay-verify="required"\n' +
        '                                           placeholder="请输入属性" autocomplete="off" class="layui-input">\n' +
        '                                </div>\n' +
        '\n' +
        '                                <label class="layui-form-label">属性值</label>\n' +
        '                                <div class="layui-input-inline">\n' +
        '                                    <input type="text" name="attrVal[]" required lay-verify="required"\n' +
        '                                           placeholder="请输入属性值" autocomplete="off" class="layui-input">\n' +
        '                                </div>\n' +
        '                            </div>'
    $('.formAttri').append(str)
}


// +----------------------------------------------------------------------
// | 表单提交页面通用表单监听（如有特殊需求可参照此文件写一个单独的js文件，如:sys_config.js）
// +----------------------------------------------------------------------

layui.use(['element', 'form'], function () {

    var element = layui.element;
    var form = layui.form;
    //监听提交
    form.on('submit(formDemo)', function (data) {
        var action = data.form.action;//表单提交URL地址
        // 图片 删除上传的ajax处理
        if (action == 'http://localhost:1080/admin/attrHandle') {
            var enumLength = Object.keys(data.field).length; // 对象长度
            var formFile = new FormData();
            var aName = []; //属性名
            var aVal = [];  //属性值
            // append 拍品ID
            formFile.append('lId', data.field['lotName']);

            // 循环 append 属性名和属性值
            for (var i = 0; i < (enumLength - 2) / 2; i++) {
                aName.push(data.field['attrName[' + i + ']'])
                aVal.push(data.field['attrVal[' + i + ']'])
            }
            formFile.append('aName', aName);
            formFile.append('aVal', aVal);
            // 循环 append 图片
            for (var i = 0; i < img.length; i++) {
                formFile.append('img_' + i, img[i])
                formFile.append('iLength', i + 1);
            }

            $.ajax({
                url: action,
                type: 'post',
                dataType: 'json',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                processData: false, // 告诉jQuery不要去处理发送的数据
                contentType: false, // 告诉jQuery不要去设置Content-Type请求头
                data: formFile,
                success: function (data) {
                    if (data.code_status === 200) {
                        insertAttri(data.message)
                    }
                }, error: function (data) {
                    console.log( data )
                }
            });

            return false;//注释掉这行代码后，表单将会以普通方式提交表单，否则以ajax方式提交表单
        }

        $.ajax({
            url: action,
            type: 'get',
            dataType: 'json',
            data: {
                data: data.field
            },
            success: function (data) {
                if (data.code_status === 200) {
                    insertAttri(data.message)
                }
            }
        });

        return false;//注释掉这行代码后，表单将会以普通方式提交表单，否则以ajax方式提交表单
    });
});