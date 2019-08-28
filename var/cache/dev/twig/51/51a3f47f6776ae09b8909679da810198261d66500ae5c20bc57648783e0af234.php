<?php

/* Open/Common/layout.twig */
class __TwigTemplate_7e5d3a24a3046b7a75191caa923a759a2d3d36280ba6e8a9ee5ae988daddd4a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'validation_scripts' => array($this, 'block_validation_scripts'),
            'main_content' => array($this, 'block_main_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Common/layout.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Open/Common/layout.twig"));

        // line 1
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array());
        // line 2
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 3
        $context["current_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "pathinfo", array());
        // line 4
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/nornmalize.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/common.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/iconfont/iconfont.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/index.css\" rel=\"stylesheet\">

  <!--        <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/default/default.css\" rel=\"stylesheet\">-->
  ";
        // line 19
        echo "  <link id=\"skin_link\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/default/default.css\" rel=\"stylesheet\">

  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\" type=\"text/javascript\"></script>
  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.form.min.js\"></script>
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
  <style type=\"text/css\">
    .m-right{overflow-y: scroll;}
    /*input::-webkit-input-placeholder{font-size: 14px;line-height: 38px;font-weight:normal}*/

  </style>

  ";
        // line 30
        $this->displayBlock('css', $context, $blocks);
        // line 32
        echo "  ";
        $this->displayBlock('js', $context, $blocks);
        // line 34
        echo "  ";
        $this->displayBlock('validation_scripts', $context, $blocks);
        // line 36
        echo "</head>
<body>
";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->source); })()), "debug", array())) {
            // line 39
            echo "  <div style=\"background-color: darkred;height: 5px;\"></div>
";
        }
        // line 41
        echo "<div class=\"g-head\" style=\"\">
  <div class=\"m-head s-head\">
    <a class=\"m-logo\" href=\"/reseller\" ></a>
    <div class=\"m-sort s-link\">
      <div class=\"bubble-item\" id=\"select-skin\" style=\"display: none;\">
        <div class=\"bubble\">
          <div class=\"bubble-arrow\">
            <em></em>
            <span></span>
          </div>
          <p>请选择喜欢的皮肤：</p>
          ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "default", 1 => "black", 2 => "orange", 3 => "green", 4 => "purple", 5 => "brown", 6 => "blue-2"));
        foreach ($context['_seq'] as $context["_key"] => $context["skin"]) {
            // line 53
            echo "          <a class=\"";
            echo twig_escape_filter($this->env, $context["skin"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["skin"], "html", null, true);
            echo "\" href=\"javascript:void (0);\" onclick=\"change_skin('";
            echo twig_escape_filter($this->env, $context["skin"], "html", null, true);
            echo "');\"></a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
      </div>
    </div>
    <div class=\"m-total s-link\">
      <span class=\"s-white\">店铺名称：";
        // line 59
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "shop_name", array()), "")) : ("")), "html", null, true);
        echo "</span>
      <span class=\"s-white\">帐号：";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 60, $this->source); })()), "user_name", array()), "html", null, true);
        echo "</span>
      <span class=\"s-white\">账户余额：<a href=\"/backend/balance-recharge\" id=\"head_agent_user_momeny_balance\" title=\"点击充值余额\">";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "balance", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "resellerAccount", array(), "any", false, true), "balance", array()), 0)) : (0)), 2), "html", null, true);
        echo "</a>元</span>
      <a href=\"javascript:void (0);\" onclick=\"refresh_balance();\"><i class=\"iconfont\">&#xe62e;</i>刷新余额</a>
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe62d;</i>系统设置</a>-->
      <a href=\"javascript:void (0);\" class=\"lock-screen\" id=\"lock-screen\"><i class=\"iconfont\">&#xea54;</i>锁屏</a>
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe62e;</i>交接班</a>-->
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe661;</i>网站导航</a>-->
      <a href=\"<?=\\yii\\helpers\\Url::to(['out'])?>\"><i class=\"iconfont\">&#xe642;</i>退出</a>
    </div>
  </div>
  <div class=\"m-head-nav f-fs-16\">
    ";
        // line 71
        $this->loadTemplate("Open/Common/topNav.twig", "Open/Common/layout.twig", 71)->display($context);
        // line 72
        echo "  </div>
</div>
<!-- 主体 -->
<div class=\"g-main\">
  <!-- 侧栏导航 -->
  <div class=\"m-left\">
    ";
        // line 78
        $this->loadTemplate("Open/Common/left_nav_head.twig", "Open/Common/layout.twig", 78)->display($context);
        // line 79
        echo "  </div>
  <!-- /侧栏导航 -->
  <!-- 右侧内容区域 -->
  <div class=\"m-right\">
    ";
        // line 83
        $this->displayBlock('main_content', $context, $blocks);
        // line 85
        echo "  </div>
  <!-- /右侧内容区域 -->
</div>
<!--弹出层-锁屏-->
<!-- /主体 -->
<div id=\"notice_dialog\" style=\"display: none\">
  <div style=\"padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;\" id=\"notice_dialog_content\">

  </div>
</div>

";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 98
        echo "

<script type=\"text/javascript\">
    var _CSRF='";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("print_settings"), "html", null, true);
        echo "';
    layui.use(['layer'], function(){
        var layer = layui.layer;

    });
    notice_dialog();
    function notice_dialog() {

//        \$.ajax('/get-dialog-notice',{
//
//            success:function (re) {
//                if(!re.status){
//                    return false;
//                }
//                \$('#notice_dialog_content').html(re.data.content);
//                layui.use(['layer'], function(){
//                    var layer = layui.layer;
//                    layer.open({
//                        type: 1
////                            ,title: re.data.title //不显示标题栏
//                        ,title: false //不显示标题栏
//                        ,closeBtn: false
//                        ,area: '300px;'
//                        ,shade: 0.8
//                        ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
//                        ,btn: ['知道了', '下次再看']
//                        ,btnAlign: 'c'
//                        ,moveType: 1 //拖拽模式，0或者1
//                        ,content:\$('#notice_dialog')
//                        ,yes:function (index) {
//                            setread(1,re.data.id);
//                            layer.close(index);
//                        }
//                        ,btn2:function (index) {
//                            setread(2,re.data.id);
//                            layer.close(index);
//                        }
//                    });
//                });
//            }
//        });

    }

    function setread(status,id) {
        \$.ajax('/read-notice',{
            type:'post'
            ,data:{id:id,status:status,'_token':_CSRF}
            ,success:function () {
                if(data.status){
                    return true;
                }
                layer.msg('操作失败');
            }
        });
    }





    \$('#lock-screen').click(function () {
        \$.ajax('/lock-screen/index',{
            type:'post'
            ,data:{'_token':_CSRF,url:location.href}
            ,success:function (data) {
                if(!data.status){
                    layer.msg(data.msg);
                    return false;
                }
                location.href=(data.url);
            }
        });
    });

    \$('#select-skin').mouseleave(function () {
        \$(this).hide();
    });
    var this_user_skin='';
    function change_skin(skin) {
        if(skin==this_user_skin){
            layer.msg('您正在使用这套皮肤哦！');
            return false;
        }
        \$.ajax('/backend/default/change-skin',{
            type:'post'
            ,data:{skin:skin,'_token':_CSRF}
            ,success:function (data) {
                layer.msg(data.msg);
                if(!data.status){
                    return false;
                }
                \$('#skin_link').attr('href','//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/'+skin+'/'+skin+'.css');
                this_user_skin=skin;
                //     location.reload();
            }
            ,error:function () {
                layer.msg('网络异常或系统繁忙，请稍后再再试');
            }
        });
    }
    function refresh_balance() {
        \$.get('/get-agent-user-balance',{},function (data) {
            \$('#head_agent_user_momeny_balance').text(data.balance);
            layer.tips('刷新成功','#head_agent_user_momeny_balance', {
                tips: [3, '#9ACD32'],
                time: 3000
            });
        });
    }
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 10, $this->source); })()), "狐豆云数据")) : ("狐豆云数据")), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 31
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 33
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_validation_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "validation_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "validation_scripts"));

        // line 35
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 84
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Open/Common/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 96,  398 => 84,  389 => 83,  379 => 35,  370 => 34,  360 => 33,  351 => 32,  341 => 31,  332 => 30,  312 => 10,  188 => 101,  183 => 98,  181 => 96,  168 => 85,  166 => 83,  160 => 79,  158 => 78,  150 => 72,  148 => 71,  135 => 61,  131 => 60,  127 => 59,  121 => 55,  108 => 53,  104 => 52,  91 => 41,  87 => 39,  85 => 38,  81 => 36,  78 => 34,  75 => 32,  73 => 30,  60 => 19,  49 => 10,  41 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = app.user %}
{% set current_route = app.request.attributes.get('_route') %}
{% set current_path  = app.request.pathinfo %}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>{% block title %} {{ title|default(\"狐豆云数据\") }} {% endblock %}</title>
  <link href=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/css/layui.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/nornmalize.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/common.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/iconfont/iconfont.css\" rel=\"stylesheet\">
  <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/index.css\" rel=\"stylesheet\">

  <!--        <link href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/default/default.css\" rel=\"stylesheet\">-->
  {#<link id=\"skin_link\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/<?=\$this->params['user_skin']?>/<?=\$this->params['user_skin']?>.css\" rel=\"stylesheet\" onerror=\"this.href='//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/default/default.css';\">#}
  <link id=\"skin_link\" href=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/default/default.css\" rel=\"stylesheet\">

  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.min.js\" type=\"text/javascript\"></script>
  <script src=\"//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/common/js/jquery.form.min.js\"></script>
  <script src=\"//foxdou-public.oss-cn-shenzhen.aliyuncs.com/assets/common/layui/layui.all.js\"></script>
  <style type=\"text/css\">
    .m-right{overflow-y: scroll;}
    /*input::-webkit-input-placeholder{font-size: 14px;line-height: 38px;font-weight:normal}*/

  </style>

  {% block css %}
  {% endblock %}
  {% block js %}
  {% endblock %}
  {% block validation_scripts %}
  {% endblock %}
</head>
<body>
{% if app.debug %}
  <div style=\"background-color: darkred;height: 5px;\"></div>
{% endif %}
<div class=\"g-head\" style=\"\">
  <div class=\"m-head s-head\">
    <a class=\"m-logo\" href=\"/reseller\" ></a>
    <div class=\"m-sort s-link\">
      <div class=\"bubble-item\" id=\"select-skin\" style=\"display: none;\">
        <div class=\"bubble\">
          <div class=\"bubble-arrow\">
            <em></em>
            <span></span>
          </div>
          <p>请选择喜欢的皮肤：</p>
          {% for skin in ['default', 'black', 'orange', 'green', 'purple', 'brown', 'blue-2',] %}
          <a class=\"{{ skin }}\" value=\"{{ skin }}\" href=\"javascript:void (0);\" onclick=\"change_skin('{{ skin }}');\"></a>
          {% endfor %}
        </div>
      </div>
    </div>
    <div class=\"m-total s-link\">
      <span class=\"s-white\">店铺名称：{{ user.resellerAccount.shop_name|default('') }}</span>
      <span class=\"s-white\">帐号：{{ user.user_name }}</span>
      <span class=\"s-white\">账户余额：<a href=\"/backend/balance-recharge\" id=\"head_agent_user_momeny_balance\" title=\"点击充值余额\">{{ user.resellerAccount.balance|default(0)|number_format(2) }}</a>元</span>
      <a href=\"javascript:void (0);\" onclick=\"refresh_balance();\"><i class=\"iconfont\">&#xe62e;</i>刷新余额</a>
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe62d;</i>系统设置</a>-->
      <a href=\"javascript:void (0);\" class=\"lock-screen\" id=\"lock-screen\"><i class=\"iconfont\">&#xea54;</i>锁屏</a>
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe62e;</i>交接班</a>-->
      <!--                <a href=\"javascript:void (0);\"><i class=\"iconfont\">&#xe661;</i>网站导航</a>-->
      <a href=\"<?=\\yii\\helpers\\Url::to(['out'])?>\"><i class=\"iconfont\">&#xe642;</i>退出</a>
    </div>
  </div>
  <div class=\"m-head-nav f-fs-16\">
    {% include \"Open/Common/topNav.twig\" %}
  </div>
</div>
<!-- 主体 -->
<div class=\"g-main\">
  <!-- 侧栏导航 -->
  <div class=\"m-left\">
    {% include \"Open/Common/left_nav_head.twig\" %}
  </div>
  <!-- /侧栏导航 -->
  <!-- 右侧内容区域 -->
  <div class=\"m-right\">
    {% block main_content %}
    {% endblock %}
  </div>
  <!-- /右侧内容区域 -->
</div>
<!--弹出层-锁屏-->
<!-- /主体 -->
<div id=\"notice_dialog\" style=\"display: none\">
  <div style=\"padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;\" id=\"notice_dialog_content\">

  </div>
</div>

{% block footer %}
{% endblock %}


<script type=\"text/javascript\">
    var _CSRF='{{ csrf_token(\"print_settings\") }}';
    layui.use(['layer'], function(){
        var layer = layui.layer;

    });
    notice_dialog();
    function notice_dialog() {

//        \$.ajax('/get-dialog-notice',{
//
//            success:function (re) {
//                if(!re.status){
//                    return false;
//                }
//                \$('#notice_dialog_content').html(re.data.content);
//                layui.use(['layer'], function(){
//                    var layer = layui.layer;
//                    layer.open({
//                        type: 1
////                            ,title: re.data.title //不显示标题栏
//                        ,title: false //不显示标题栏
//                        ,closeBtn: false
//                        ,area: '300px;'
//                        ,shade: 0.8
//                        ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
//                        ,btn: ['知道了', '下次再看']
//                        ,btnAlign: 'c'
//                        ,moveType: 1 //拖拽模式，0或者1
//                        ,content:\$('#notice_dialog')
//                        ,yes:function (index) {
//                            setread(1,re.data.id);
//                            layer.close(index);
//                        }
//                        ,btn2:function (index) {
//                            setread(2,re.data.id);
//                            layer.close(index);
//                        }
//                    });
//                });
//            }
//        });

    }

    function setread(status,id) {
        \$.ajax('/read-notice',{
            type:'post'
            ,data:{id:id,status:status,'_token':_CSRF}
            ,success:function () {
                if(data.status){
                    return true;
                }
                layer.msg('操作失败');
            }
        });
    }





    \$('#lock-screen').click(function () {
        \$.ajax('/lock-screen/index',{
            type:'post'
            ,data:{'_token':_CSRF,url:location.href}
            ,success:function (data) {
                if(!data.status){
                    layer.msg(data.msg);
                    return false;
                }
                location.href=(data.url);
            }
        });
    });

    \$('#select-skin').mouseleave(function () {
        \$(this).hide();
    });
    var this_user_skin='';
    function change_skin(skin) {
        if(skin==this_user_skin){
            layer.msg('您正在使用这套皮肤哦！');
            return false;
        }
        \$.ajax('/backend/default/change-skin',{
            type:'post'
            ,data:{skin:skin,'_token':_CSRF}
            ,success:function (data) {
                layer.msg(data.msg);
                if(!data.status){
                    return false;
                }
                \$('#skin_link').attr('href','//foxdou-public-read.oss-cn-shenzhen.aliyuncs.com/agent/css/skin/'+skin+'/'+skin+'.css');
                this_user_skin=skin;
                //     location.reload();
            }
            ,error:function () {
                layer.msg('网络异常或系统繁忙，请稍后再再试');
            }
        });
    }
    function refresh_balance() {
        \$.get('/get-agent-user-balance',{},function (data) {
            \$('#head_agent_user_momeny_balance').text(data.balance);
            layer.tips('刷新成功','#head_agent_user_momeny_balance', {
                tips: [3, '#9ACD32'],
                time: 3000
            });
        });
    }
</script>
</body>
</html>
", "Open/Common/layout.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Open\\Common\\layout.twig");
    }
}
