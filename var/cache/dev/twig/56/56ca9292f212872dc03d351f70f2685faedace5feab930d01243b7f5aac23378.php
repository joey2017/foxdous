<?php

/* Admin/UserDetail/OpenPlatform/charge_logs.twig */
class __TwigTemplate_96f17710b40e40e16ed4bff9a7ac5899504307fd131bf7b2c96dade76523a4b3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/charge_logs.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/UserDetail/OpenPlatform/charge_logs.twig"));

        // line 1
        $context["sf"] = $this->loadTemplate("/Common/simple_form_helpers.html.twig", "Admin/UserDetail/OpenPlatform/charge_logs.twig", 1);
        // line 2
        echo "<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>Ta的财务-资金明细</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
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
    <style>
        .screen-item{background:none; border:none;  padding: 0px;}
        .col-sm-2{width: 17.45%}
        .date {
            width: 420px;
            float: left;
        }
        .seach input, .seach select {
            background-color: #fff;
            border: 1px solid #e5e6e7;
            padding: 6px 12px;
        }
    </style>
</head>

<body>
<div class=\"main-box\">
    ";
        // line 39
        $this->loadTemplate("Admin/UserDetail/OpenPlatform/common_tabs.twig", "Admin/UserDetail/OpenPlatform/charge_logs.twig", 39)->display($context);
        // line 40
        echo "    <div class=\"screen-item\">
        <div class=\"seach\">
            <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("admin_user_details_open_platform_ajax_charge_logs"), "html", null, true);
        echo "\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">流水号</span>
                        <input class=\"form-control product-price\" name=\"trade_sn\" placeholder=\"流水号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">业务单号</span>
                        <input class=\"form-control product-price\" name=\"order_sn\" placeholder=\"业务单号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值状态</span>
                        ";
        // line 57
        echo $context["sf"]->macro_select_raw("recharge_status", twig_array_merge(array("" => "全部"), twig_constant("App\\Common\\Model\\Payment\\UserBalanceRechargeOrders::STATUSES")), array("class" => "form-control"));
        echo "
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">支付方式</span>
                        ";
        // line 62
        echo $context["sf"]->macro_select_raw("payment_class_id", twig_array_merge(array("" => "全部"), twig_constant("App\\PaymentConstants::PAYMENT_METHOD_CLASSES")), array("class" => "form-control"));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值金额范围</span>
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_min\" value=\"\" placeholder=\"最小金额\" type=\"text\">
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_max\" value=\"\" placeholder=\"最大金额\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\" style=\"width: 370px;\"><span class=\"input-group-addon\">时间</span>
                        <input style=\"width:50%\" id=\"start_time\" class=\"form-control product-price layer-date\" name=\"start_time\" value=\"\" type=\"text\">
                        <input style=\"width:50%\" id=\"end_time\" class=\"form-control product-price layer-date\" name=\"end_time\" value=\"\" type=\"text\">
                    </div>
                </div>
            </div>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
            </form>
        </div>
    </div>
    <div class=\"h-button-group\">
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"show_count(this)\">查看统计</button>
    </div>
    <div class=\"m-table-total\" style=\"display: none; padding: 20px; background: #fcf8e3;\">
        <ul class=\"g-bdc\">
            <li>总计：<span id=\"income_count\"></span>（<span id=\"income_sum_money\"></span>）</li>
        </ul>
    </div>
    <div class=\"h-input-block table-style1\">
        <table id=\"paged-table\" lay-filter=\"test\">

        </table>
    </div>
</div>

</body>
</html>

<script id=\"add_time\" type=\"text/html\">
    ";
        // line 109
        echo "
    {{#
        var date = new Date();
        date.setTime(d.add_time*1000);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    ";
        echo "
</script>

<script type=\"text/html\" id=\"actions\">
    <button class=\"layui-btn layui-btn-xs edit_btn\" lay-event=\"detail\">详情</button>
</script>

<script type=\"text/javascript\">
    var baseUrl = '";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_details_open_platform_ajax_charge_logs");
        echo "';
    var columns = [[
        {\"field\": \"trade_sn\", \"title\": \"交易流水号\"},
        {\"field\": \"payment_class_id\", \"title\": \"支付方式\"},
        {\"field\": \"status\", \"title\": \"充值状态\"},
        {\"field\": \"amount\", \"title\": \"充值金额\"},
        {\"field\": \"current_balance\", \"title\": \"交易后余额\"},
        {\"field\": \"note\", \"title\": \"备注\"},
        {\"field\": \"add_time\", \"title\": \"时间\", templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var params = \$('form#list-data').serialize();
        var url = baseUrl + '?' + 'id=";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "&' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function() {
        // 初始化
        get_data();
    });

    var show_count_num=0;
    function show_count(dom){
        if(\$(dom).text() == '查看统计'){
            \$('.m-table-total').css('display','block');
            var params = \$('form#list-data').serialize();
            var url = baseUrl+'?id=";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 145, $this->source); })()), "html", null, true);
        echo "&'+params+'&count=yes';
            if(show_count_num==0){
                \$.get(url,'',function (data) {
                    if(data.status){
                        \$('#income_count').text(data.data.income[0].count+'笔');
                        \$('#income_sum_money').text(data.data.income[0].sum_money+'元');
                    }

                });
            }
            \$(dom).text('关闭统计')
        }else if(\$(dom).text()=='关闭统计'){
            \$('.m-table-total').css('display','none');
            \$(dom).text('查看统计')
        }
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
        return "Admin/UserDetail/OpenPlatform/charge_logs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 145,  180 => 131,  163 => 117,  146 => 109,  102 => 62,  94 => 57,  77 => 43,  72 => 40,  70 => 39,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import ('/Common/simple_form_helpers.html.twig') as sf %}
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\" />
    <title>Ta的财务-资金明细</title>
    <link rel=\"stylesheet\" href=\"/assets/admin/h/css/common.css\" />
    <script type=\"text/javascript\" src=\"/assets/admin/js/jquery.min.js\"></script>
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
    <style>
        .screen-item{background:none; border:none;  padding: 0px;}
        .col-sm-2{width: 17.45%}
        .date {
            width: 420px;
            float: left;
        }
        .seach input, .seach select {
            background-color: #fff;
            border: 1px solid #e5e6e7;
            padding: 6px 12px;
        }
    </style>
</head>

<body>
<div class=\"main-box\">
    {% include \"Admin/UserDetail/OpenPlatform/common_tabs.twig\" %}
    <div class=\"screen-item\">
        <div class=\"seach\">
            <form action=\"\" method=\"get\" enctype=\"multipart/form-data\" id=\"list-data\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('admin_user_details_open_platform_ajax_charge_logs') }}\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">流水号</span>
                        <input class=\"form-control product-price\" name=\"trade_sn\" placeholder=\"流水号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">业务单号</span>
                        <input class=\"form-control product-price\" name=\"order_sn\" placeholder=\"业务单号\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值状态</span>
                        {{ sf.select_raw('recharge_status', {\"\": \"全部\"}|merge(constant(\"App\\\\Common\\\\Model\\\\Payment\\\\UserBalanceRechargeOrders::STATUSES\")), {\"class\": \"form-control\"}) }}
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">支付方式</span>
                        {{ sf.select_raw('payment_class_id', {\"\": \"全部\"}|merge(constant(\"App\\\\PaymentConstants::PAYMENT_METHOD_CLASSES\")), {\"class\": \"form-control\"}) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\"><span class=\"input-group-addon\">充值金额范围</span>
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_min\" value=\"\" placeholder=\"最小金额\" type=\"text\">
                        <input style=\"width:50%\" class=\"form-control product-price\" name=\"amount_max\" value=\"\" placeholder=\"最大金额\" type=\"text\">
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group m-b\" style=\"width: 370px;\"><span class=\"input-group-addon\">时间</span>
                        <input style=\"width:50%\" id=\"start_time\" class=\"form-control product-price layer-date\" name=\"start_time\" value=\"\" type=\"text\">
                        <input style=\"width:50%\" id=\"end_time\" class=\"form-control product-price layer-date\" name=\"end_time\" value=\"\" type=\"text\">
                    </div>
                </div>
            </div>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"position:relative;top:-60px;margin-right:100px;float: right;\" onclick=\"get_data();return false;\">查询</button>
            </form>
        </div>
    </div>
    <div class=\"h-button-group\">
        <button class=\"layui-btn layui-btn-small f-fnsna\" onclick=\"show_count(this)\">查看统计</button>
    </div>
    <div class=\"m-table-total\" style=\"display: none; padding: 20px; background: #fcf8e3;\">
        <ul class=\"g-bdc\">
            <li>总计：<span id=\"income_count\"></span>（<span id=\"income_sum_money\"></span>）</li>
        </ul>
    </div>
    <div class=\"h-input-block table-style1\">
        <table id=\"paged-table\" lay-filter=\"test\">

        </table>
    </div>
</div>

</body>
</html>

<script id=\"add_time\" type=\"text/html\">
    {% verbatim %}
    {{#
        var date = new Date();
        date.setTime(d.add_time*1000);
        return date.Format(\"yyyy-MM-dd hh:mm:ss\");
    }}
    {% endverbatim %}
</script>

<script type=\"text/html\" id=\"actions\">
    <button class=\"layui-btn layui-btn-xs edit_btn\" lay-event=\"detail\">详情</button>
</script>

<script type=\"text/javascript\">
    var baseUrl = '{{ path('admin_user_details_open_platform_ajax_charge_logs') }}';
    var columns = [[
        {\"field\": \"trade_sn\", \"title\": \"交易流水号\"},
        {\"field\": \"payment_class_id\", \"title\": \"支付方式\"},
        {\"field\": \"status\", \"title\": \"充值状态\"},
        {\"field\": \"amount\", \"title\": \"充值金额\"},
        {\"field\": \"current_balance\", \"title\": \"交易后余额\"},
        {\"field\": \"note\", \"title\": \"备注\"},
        {\"field\": \"add_time\", \"title\": \"时间\", templet: \"#add_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\"}
    ]];

    function get_data() {
        var params = \$('form#list-data').serialize();
        var url = baseUrl + '?' + 'id={{ id }}&' + params;
        rander_table('#paged-table', url, columns);
    }

    layui.use(['table', 'laytpl'], function() {
        // 初始化
        get_data();
    });

    var show_count_num=0;
    function show_count(dom){
        if(\$(dom).text() == '查看统计'){
            \$('.m-table-total').css('display','block');
            var params = \$('form#list-data').serialize();
            var url = baseUrl+'?id={{ id }}&'+params+'&count=yes';
            if(show_count_num==0){
                \$.get(url,'',function (data) {
                    if(data.status){
                        \$('#income_count').text(data.data.income[0].count+'笔');
                        \$('#income_sum_money').text(data.data.income[0].sum_money+'元');
                    }

                });
            }
            \$(dom).text('关闭统计')
        }else if(\$(dom).text()=='关闭统计'){
            \$('.m-table-total').css('display','none');
            \$(dom).text('查看统计')
        }
    }

</script>
</body>
</html>

", "Admin/UserDetail/OpenPlatform/charge_logs.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\UserDetail\\OpenPlatform\\charge_logs.twig");
    }
}