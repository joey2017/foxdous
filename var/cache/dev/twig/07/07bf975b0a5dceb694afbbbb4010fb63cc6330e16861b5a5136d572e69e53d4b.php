<?php

/* Admin/UserDetail/OpenPlatform/apps.twig */
class __TwigTemplate_7e2b57eda3384a15ae30e09a4585a5ebff35ab2f599935bbd0cfa621433e7394 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/apps.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/apps.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-Ta的应用-交易记录</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script src=\"/assets/admin/js/jquery.min.js\"></script>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <!--下拉列表-->
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
    <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>
    <style type=\"text/css\">
        .table-style1 table tr td a{width: auto;}
    </style>
</head>

<body>
<div class=\"main-box\">
    <div class=\"screen-item\">
        <form action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_apps");
        echo "\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
        <div class=\"h-form-input\">
            <div class=\"h-input-item\">
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">APPID</label>
                    <div class=\"h-input-inline\">
                        <input type=\"text\" name=\"app_id\" value=\"\" placeholder=\"请输入APPID\" class=\"h-input-ing\" />
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">搜索应用</label>
                    <div class=\"h-input-inline\">
                        <input type=\"text\" name=\"name\" value=\"\" placeholder=\"请输入应用名称\" class=\"h-input-ing\" />
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">应用状态</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"app_status\" value=\"\">
                            <ul class=\"xui-select2-option\">
                                <li value=\"all\" >全部</li>
                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\User\\ApiAppOpen::APP_STATUSES"));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 52
            echo "                                    <li value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">扣费方式</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"pay_type\" value=\"<?=\$request->get('pay_type')==null?'all':\$request->get('pay_type')?>\">
                            <ul class=\"xui-select2-option\">
                                <li value=\"all\" >全部</li>
                                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\User\\ApiAppOpen::PAY_TYPES"));
        foreach ($context['_seq'] as $context["k_p"] => $context["v_p"]) {
            // line 65
            echo "                                    <li value=\"";
            echo twig_escape_filter($this->env, $context["k_p"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["v_p"], "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k_p'], $context['v_p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"location-btn\">
                <div class=\"h-input-group\">
                    <div class=\"h-input-inline\">
                        <button type=\"submit\" class=\"btn-green btn btn-primary\" style=\"top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
                    </div>
                </div>
            </div>
        </div>
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_user_details_open_platform_apps"), "html", null, true);
        echo "\">
        </form>
    </div>
    <!--    <div class=\"h-button-group\">-->
    <!--        <button class=\"btn btn-green\">查看统计</button>-->
    <!--        <button class=\"btn btn-green\">导出订单</button>-->
    <!--    </div>-->
    <div class=\"h-input-block table-style1\" style=\"overflow-x: auto;width:100%\">
        <table id=\"paged-table\" lay-filter=\"test\">

        </table>
    </div>
</div>

<div id=\"dialog\" style=\"display: none;\">
    <form action=\"\" method=\"post\">
        <div class=\"h-form-input\">
            <div class=\"h-input-item\">
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">应用状态</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"status\" value=\"\"  style=\"width: 200px;\">
                            <div class=\"xui-arrow\"></div>
                            <ul class=\"xui-select2-option\" style=\"display: none;\">
                                ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\User\\ApiAppOpen::APP_STATUSES"));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 105
            echo "                                    <li value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script id=\"last_pay_time\" type=\"text/html\">
    ";
        // line 123
        echo "
    {{#
        var date = new Date();
        date.setTime(d.last_pay_time);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    ";
        echo "
</script>

<script id=\"end_use_time\" type=\"text/html\">
    ";
        // line 133
        echo "
    {{#
        var date = new Date();
        date.setTime(d.end_use_time);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    ";
        echo "
</script>

<script type=\"text/html\" id=\"actions\">
    <button class=\"layui-btn layui-btn-xs edit_btn\" lay-event=\"edit\">修改</button>
</script>

<script type=\"text/javascript\">

    var pay_types = [];
    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\User\\ApiAppOpen::PAY_TYPES"));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 144
            echo "        ";
            // line 145
            echo "        pay_types.push('";
            echo twig_escape_filter($this->env, $context["status"], "html", null, true);
            echo "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "
    var app_statuses = [];
    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_constant("App\\Common\\Model\\User\\ApiAppOpen::APP_STATUSES"));
        foreach ($context['_seq'] as $context["_key"] => $context["status_a"]) {
            // line 150
            echo "        app_statuses.push('";
            echo twig_escape_filter($this->env, $context["status_a"], "html", null, true);
            echo "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status_a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "
    var url = \"\";
    var columns = [[
        {\"field\": \"name\", \"title\": \"应用名称\", templet: function(d){
                return '<img src=\"'+d.thumb+'\"style=\"width: 50px;\"onerror=\"this.src=\\'/img/service-goods-default.png\\';\"/>'+d.name;
            }},
        {\"field\": \"app_id\", \"title\": \"APPID\"},
        {\"field\": \"pay_type\", \"title\": \"费扣方式\", templet: function(d){
                return  pay_types[d.pay_type-1];
            }},
        {\"field\": \"pay_template\", \"title\": \"频率限制\", templet: function(d){
                return payment_template_formated(d.pay_template,d.pay_type)
            }},
        {\"field\": \"balance\", \"title\": \"余量\"},
        {\"field\": \"status\", \"title\": \"应用状态\", templet: function(d){
                return app_statuses[d.status];
            }},
        {\"field\": \"last_pay_time\", \"title\": \"上次续费时间\", templet: \"#last_pay_time\"},
        {\"field\": \"end_use_time\", \"title\": \"到期时间\", templet: \"#end_use_time\"},
        {\"field\": \"service_name\", \"title\": \"所在服务\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var params=\$('form#list-data').serialize();
        url = '?' + 'id=";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 177, $this->source); })()), "html", null, true);
        echo "&' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function(){
        // 初始化
        get_data();

        //监听工具条
        layui.table.on('tool(test)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
            var data = obj.data; //获得当前行数据
            var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

            if(layEvent === 'edit'){ //编辑
                //do something
                var obj = \$('#dialog');
                var url = '";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_apps_edit");
        echo "';

                obj.find('input[name=\"status\"]').val(data.status);
                obj.find('div[name=\"status\"]').find('span').text(app_statuses[data.status]);

                layer.open({
                    type: 1,
                    title:'修改用户id='+'";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 200, $this->source); })()), "html", null, true);
        echo "'+'的服务',
                    area:['400px','400px'],
                    content: \$('#dialog'),
                    btn: ['确定', '取消'],
                    yes: function(index) {

                        var args = {};
                        var loading = null;
                        args.id = '";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 208, $this->source); })()), "html", null, true);
        echo "';
                        args.status = obj.find('input[name=\"status\"]').val();
                        args.app_id = data.app_id;

                        var before = function(){
                            loading = layer.load();
                        }
                        var error = function(){
                            layer.close(loading);
                            layer.alert('服务器未响应，请稍后重试');
                        }
                        var success = function(data){
                            layer.close(loading);
                            if(data.status){
                                layer.close(index);
                                layer.msg('修改成功',{time:1000},function () {
                                    location.reload();
                                });
                            }else{
                                layer.alert(data.msg);
                            }
                        }
                        new ajaxRequest(
                            {url:url,type:'POST',data:args,dataType:'json',success:success,before:before,error:error}
                            );
                    }
                });
            }
        });
    })

    function payment_template_formated(pay_template,pay_type) {
        var tian_ci='';
        var pinlv='-';
        try{
            var app_pay_tem=JSON.parse(pay_template);
        }catch (e){
            return '-';
        }
        if(pay_type!=1 && pay_type!=3){
            if(app_pay_tem['pinlv_miao']==1 && app_pay_tem['pinlv_ci']==1){
                pinlv=app_pay_tem['pinlv_ci']+\"次/秒\";
            }
            if(app_pay_tem['pinlv_miao']>1 && app_pay_tem['pinlv_ci']==1){
                pinlv=app_pay_tem['pinlv_miao']+\"秒/次\";
            }
            if(app_pay_tem['pinlv_ci']>1 && app_pay_tem['pinlv_miao']==1){
                pinlv=app_pay_tem['pinlv_ci']+\"次/秒\";
            }
            if(app_pay_tem['pinlv_ci']>1 && app_pay_tem['pinlv_miao']>1){
                pinlv=app_pay_tem['pinlv_miao']+\"秒\"+app_pay_tem['pinlv_ci']+\"次\";
            }
            if(app_pay_tem['pinlv_ci']==0 && app_pay_tem['pinlv_miao']==0){
                pinlv=\"不限\";
            }
        }
        var package=pinlv;
        var ci=app_pay_tem['ci'];
        if(pay_type==5){
            if(app_pay_tem['tian']==1 && ci==1){
                tian_ci=ci+\"次/天\";
            }
            if(app_pay_tem['tian']>1 && ci==1){
                tian_ci=app_pay_tem['tian']+\"天/次\";
            }
            if(ci>1 && app_pay_tem['tian']==1){
                tian_ci=ci+\"次/天\";
            }
            if(ci>1 && app_pay_tem['tian']>1){
                tian_ci=app_pay_tem['tian']+\"天\"+ci+\"次\";
            }
            if(ci==0 && app_pay_tem['tian']==0){
                tian_ci=\"不限\";
            }
            package=pinlv+'('+tian_ci+')';
        }
        return package;
    }

</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/UserDetail/OpenPlatform/apps.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 208,  315 => 200,  305 => 193,  286 => 177,  259 => 152,  250 => 150,  246 => 149,  242 => 147,  233 => 145,  231 => 144,  227 => 143,  208 => 133,  195 => 123,  183 => 107,  172 => 105,  168 => 104,  141 => 80,  126 => 67,  115 => 65,  111 => 64,  99 => 54,  88 => 52,  84 => 51,  60 => 30,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>基本管理-Ta的应用-交易记录</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script src=\"/assets/admin/js/jquery.min.js\"></script>
    <link href=\"/assets/admin/h/css/bootstrap.min14ed.css?v=3.3.6\" rel=\"stylesheet\">
    <script src=\"/assets/admin/h/js/jquery.min.js?v=2.1.4\"></script>
    <link href=\"/assets/admin/h/css/style.min862f.css?v=4.1.0\" rel=\"stylesheet\">

    <script src=\"/assets/admin/h/js/plugins/layer/laydate/laydate.js\"></script>

    <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
    <script src=\"/assets/admin/js/common.js\"></script>
    <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
    <script src=\"/assets/common/js/ajaxRequest.js\"></script>
    <!--下拉列表-->
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/xui-select2.css\"/>
    <script type=\"text/javascript\" src=\"/assets/admin/h/js/xui-select2.js\"></script>
    <style type=\"text/css\">
        .table-style1 table tr td a{width: auto;}
    </style>
</head>

<body>
<div class=\"main-box\">
    <div class=\"screen-item\">
        <form action=\"{{ path('admin_user_details_open_platform_apps') }}\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
        <div class=\"h-form-input\">
            <div class=\"h-input-item\">
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">APPID</label>
                    <div class=\"h-input-inline\">
                        <input type=\"text\" name=\"app_id\" value=\"\" placeholder=\"请输入APPID\" class=\"h-input-ing\" />
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">搜索应用</label>
                    <div class=\"h-input-inline\">
                        <input type=\"text\" name=\"name\" value=\"\" placeholder=\"请输入应用名称\" class=\"h-input-ing\" />
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">应用状态</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"app_status\" value=\"\">
                            <ul class=\"xui-select2-option\">
                                <li value=\"all\" >全部</li>
                                {% for k,v in constant(\"App\\\\Common\\\\Model\\\\User\\\\ApiAppOpen::APP_STATUSES\") %}
                                    <li value=\"{{ k }}\">{{ v }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">扣费方式</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"pay_type\" value=\"<?=\$request->get('pay_type')==null?'all':\$request->get('pay_type')?>\">
                            <ul class=\"xui-select2-option\">
                                <li value=\"all\" >全部</li>
                                {% for k_p,v_p in constant(\"App\\\\Common\\\\Model\\\\User\\\\ApiAppOpen::PAY_TYPES\") %}
                                    <li value=\"{{ k_p }}\">{{ v_p }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"location-btn\">
                <div class=\"h-input-group\">
                    <div class=\"h-input-inline\">
                        <button type=\"submit\" class=\"btn-green btn btn-primary\" style=\"top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
                    </div>
                </div>
            </div>
        </div>
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_user_details_open_platform_apps') }}\">
        </form>
    </div>
    <!--    <div class=\"h-button-group\">-->
    <!--        <button class=\"btn btn-green\">查看统计</button>-->
    <!--        <button class=\"btn btn-green\">导出订单</button>-->
    <!--    </div>-->
    <div class=\"h-input-block table-style1\" style=\"overflow-x: auto;width:100%\">
        <table id=\"paged-table\" lay-filter=\"test\">

        </table>
    </div>
</div>

<div id=\"dialog\" style=\"display: none;\">
    <form action=\"\" method=\"post\">
        <div class=\"h-form-input\">
            <div class=\"h-input-item\">
                <div class=\"h-input-group\">
                    <label class=\"h-input-lable\">应用状态</label>
                    <div class=\"h-input-inline\" style=\"background: #FFFFFF;\">
                        <div class=\"xui-select2\" name=\"status\" value=\"\"  style=\"width: 200px;\">
                            <div class=\"xui-arrow\"></div>
                            <ul class=\"xui-select2-option\" style=\"display: none;\">
                                {% for k,v in constant(\"App\\\\Common\\\\Model\\\\User\\\\ApiAppOpen::APP_STATUSES\") %}
                                    <li value=\"{{ k }}\">{{ v }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script id=\"last_pay_time\" type=\"text/html\">
    {% verbatim %}
    {{#
        var date = new Date();
        date.setTime(d.last_pay_time);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    {% endverbatim %}
</script>

<script id=\"end_use_time\" type=\"text/html\">
    {% verbatim %}
    {{#
        var date = new Date();
        date.setTime(d.end_use_time);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    {% endverbatim %}
</script>

<script type=\"text/html\" id=\"actions\">
    <button class=\"layui-btn layui-btn-xs edit_btn\" lay-event=\"edit\">修改</button>
</script>

<script type=\"text/javascript\">

    var pay_types = [];
    {% for status in constant(\"App\\\\Common\\\\Model\\\\User\\\\ApiAppOpen::PAY_TYPES\") %}
        {#pay_types.{{ key }} = '{{ status }}';#}
        pay_types.push('{{ status }}');
    {% endfor %}

    var app_statuses = [];
    {% for status_a in constant(\"App\\\\Common\\\\Model\\\\User\\\\ApiAppOpen::APP_STATUSES\") %}
        app_statuses.push('{{ status_a }}');
    {% endfor %}

    var url = \"\";
    var columns = [[
        {\"field\": \"name\", \"title\": \"应用名称\", templet: function(d){
                return '<img src=\"'+d.thumb+'\"style=\"width: 50px;\"onerror=\"this.src=\\'/img/service-goods-default.png\\';\"/>'+d.name;
            }},
        {\"field\": \"app_id\", \"title\": \"APPID\"},
        {\"field\": \"pay_type\", \"title\": \"费扣方式\", templet: function(d){
                return  pay_types[d.pay_type-1];
            }},
        {\"field\": \"pay_template\", \"title\": \"频率限制\", templet: function(d){
                return payment_template_formated(d.pay_template,d.pay_type)
            }},
        {\"field\": \"balance\", \"title\": \"余量\"},
        {\"field\": \"status\", \"title\": \"应用状态\", templet: function(d){
                return app_statuses[d.status];
            }},
        {\"field\": \"last_pay_time\", \"title\": \"上次续费时间\", templet: \"#last_pay_time\"},
        {\"field\": \"end_use_time\", \"title\": \"到期时间\", templet: \"#end_use_time\"},
        {\"field\": \"service_name\", \"title\": \"所在服务\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var params=\$('form#list-data').serialize();
        url = '?' + 'id={{ id }}&' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function(){
        // 初始化
        get_data();

        //监听工具条
        layui.table.on('tool(test)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
            var data = obj.data; //获得当前行数据
            var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

            if(layEvent === 'edit'){ //编辑
                //do something
                var obj = \$('#dialog');
                var url = '{{ path('admin_user_details_open_platform_apps_edit') }}';

                obj.find('input[name=\"status\"]').val(data.status);
                obj.find('div[name=\"status\"]').find('span').text(app_statuses[data.status]);

                layer.open({
                    type: 1,
                    title:'修改用户id='+'{{ id }}'+'的服务',
                    area:['400px','400px'],
                    content: \$('#dialog'),
                    btn: ['确定', '取消'],
                    yes: function(index) {

                        var args = {};
                        var loading = null;
                        args.id = '{{ id }}';
                        args.status = obj.find('input[name=\"status\"]').val();
                        args.app_id = data.app_id;

                        var before = function(){
                            loading = layer.load();
                        }
                        var error = function(){
                            layer.close(loading);
                            layer.alert('服务器未响应，请稍后重试');
                        }
                        var success = function(data){
                            layer.close(loading);
                            if(data.status){
                                layer.close(index);
                                layer.msg('修改成功',{time:1000},function () {
                                    location.reload();
                                });
                            }else{
                                layer.alert(data.msg);
                            }
                        }
                        new ajaxRequest(
                            {url:url,type:'POST',data:args,dataType:'json',success:success,before:before,error:error}
                            );
                    }
                });
            }
        });
    })

    function payment_template_formated(pay_template,pay_type) {
        var tian_ci='';
        var pinlv='-';
        try{
            var app_pay_tem=JSON.parse(pay_template);
        }catch (e){
            return '-';
        }
        if(pay_type!=1 && pay_type!=3){
            if(app_pay_tem['pinlv_miao']==1 && app_pay_tem['pinlv_ci']==1){
                pinlv=app_pay_tem['pinlv_ci']+\"次/秒\";
            }
            if(app_pay_tem['pinlv_miao']>1 && app_pay_tem['pinlv_ci']==1){
                pinlv=app_pay_tem['pinlv_miao']+\"秒/次\";
            }
            if(app_pay_tem['pinlv_ci']>1 && app_pay_tem['pinlv_miao']==1){
                pinlv=app_pay_tem['pinlv_ci']+\"次/秒\";
            }
            if(app_pay_tem['pinlv_ci']>1 && app_pay_tem['pinlv_miao']>1){
                pinlv=app_pay_tem['pinlv_miao']+\"秒\"+app_pay_tem['pinlv_ci']+\"次\";
            }
            if(app_pay_tem['pinlv_ci']==0 && app_pay_tem['pinlv_miao']==0){
                pinlv=\"不限\";
            }
        }
        var package=pinlv;
        var ci=app_pay_tem['ci'];
        if(pay_type==5){
            if(app_pay_tem['tian']==1 && ci==1){
                tian_ci=ci+\"次/天\";
            }
            if(app_pay_tem['tian']>1 && ci==1){
                tian_ci=app_pay_tem['tian']+\"天/次\";
            }
            if(ci>1 && app_pay_tem['tian']==1){
                tian_ci=ci+\"次/天\";
            }
            if(ci>1 && app_pay_tem['tian']>1){
                tian_ci=app_pay_tem['tian']+\"天\"+ci+\"次\";
            }
            if(ci==0 && app_pay_tem['tian']==0){
                tian_ci=\"不限\";
            }
            package=pinlv+'('+tian_ci+')';
        }
        return package;
    }

</script>
</body>
</html>
", "Admin/UserDetail/OpenPlatform/apps.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\OpenPlatform\\apps.twig");
    }
}
