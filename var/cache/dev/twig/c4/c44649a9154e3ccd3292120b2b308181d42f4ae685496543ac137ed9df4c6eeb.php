<?php

/* Admin/Audit/real_name_list_js.twig */
class __TwigTemplate_bb8436b46331da4f3549f1bf12ed6769a46659357f04448b1fdd20abb722e0da extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/real_name_list_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Audit/real_name_list_js.twig"));

        // line 1
        echo "<script>
    var types = JSON.parse('";
        // line 2
        echo json_encode(twig_constant("App\\Common\\Model\\User\\User::TYPES"));
        echo "');
    var review_statuses = JSON.parse('";
        // line 3
        echo json_encode(twig_constant("App\\Common\\Model\\User\\RealNameAuthenticationInfo::STATUSES"));
        echo "');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"实名认证记录编号\", \"width\": 150},
        {
            \"field\": \"status\", \"title\": \"审核状态\", \"width\": 150, templet: function (d) {
                return review_statuses[d.status];
            }
        },
        {\"field\": \"account\", \"title\": \"狐豆名\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"通行证账号\", \"width\": 150},
        {
            \"field\": \"entity_type\", \"title\": \"通行证类型\", \"width\": 150, templet: function (d) {
                return types[d.entity_type];
            }
        },
        {\"field\": \"note\", \"title\": \"审核说明\", \"width\": 400},
        {\"field\": \"add_time\", \"title\": \"创建时间\", templet: \"#add_time\"},
        {\"field\": \"finish_time\", \"title\": \"处理时间\", templet: \"#finish_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 100}
    ]];

    function get_data() {
        var params = \$('form#real-name-list').serialize();
        url = '?' + params;
        rander_table('#real-name-table', url, columns);
    }

    // 初始化
    get_data();
    table.on('tool(real-name-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var data = obj.data; //获得当前行数据
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

        if (layEvent === 'review') { //审核
            if (data.entity_type === '";
        // line 38
        echo twig_escape_filter($this->env, twig_constant("App\\Common\\Model\\User\\User::TYPE_INDIVIDUAL"), "html", null, true);
        echo "') {
                \$('#business_name-individual').text(data.business_name);
                \$('#business_license_no-individual').text(data.business_license_no);
                \$('#legal_person_address-individual').text(data.legal_person_address);
                \$('#positive-individual').text(data.positive);
                \$('#negative-individual').text(data.negative);
                \$('#hand-individual').text(data.hand);
                \$('#card_valid_time-individual').text(data.card_valid_time);
                layer.open({
                    type: 1
                    ,title: '实名认证审核'
                    ,area: ['700px','600px']
                    ,btn: ['审核通过', '审核不通过', '返回']
                    ,btnAlign: 'c'
                    ,content: \$('#review-content-individual')
                    ,yes: function(index, layero){
                        layer.close(index);
                        realNameReview('";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_real_names_review");
        echo "',data.id,'";
        echo twig_escape_filter($this->env, twig_constant("App\\Common\\Model\\User\\RealNameAuthenticationInfo::IDENTITY_STATUS_VERIFIED"), "html", null, true);
        echo "',\$('#note-individual').val());
                    }
                    ,btn2: function(index, layero){
                        realNameReview('";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_real_names_review");
        echo "',data.id,'";
        echo twig_escape_filter($this->env, twig_constant("App\\Common\\Model\\User\\RealNameAuthenticationInfo::IDENTITY_STATUS_FAILED"), "html", null, true);
        echo "',\$('#note-individual').val());
                    }
                    ,btn3: function(index, layero){
                        \$('#review-content-individual').hide();
                    }
                    ,cancel: function(){
                        \$('#review-content-individual').hide();
                    }
                });
            } else {
                \$('#business_name').text(data.business_name);
                \$('#user_type').text(types[data.type]);
                \$('#business_license_no').text(data.business_license_no);
                \$('#province_city_district').text(data.province_name+data.city_name);
                \$('#business_address').text(data.business_address);
                \$('#business_scope').text(data.business_scope);
                \$('#business_license_photo').attr('src',data.business_license_photo);
                \$('#license_valid_time').text(data.license_valid_time);
                \$('#legal_person_name').text(data.legal_person_name);
                \$('#identity_card_no').text(data.identity_card_no);
                \$('#legal_person_address').text(data.legal_person_address);
                \$('#card_valid_time').text(data.card_valid_time);
                \$('#positive').attr('src',data.positive);
                \$('#negative').attr('src',data.negative);
                \$('#hand').attr('src',data.hand);
                layer.open({
                    type: 1
                    ,title: '开户申请审核'
                    ,area: ['730px','550px']
                    ,btn: ['审核通过', '审核不通过', '返回']
                    ,btnAlign: 'c'
                    ,content: \$('#review-content-bussniss')
                    ,yes: function(index, layero){
                        layer.close(index);
                        realNameReview('";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_real_names_review");
        echo "',data.id,'";
        echo twig_escape_filter($this->env, twig_constant("App\\Common\\Model\\User\\RealNameAuthenticationInfo::IDENTITY_STATUS_VERIFIED"), "html", null, true);
        echo "',\$('#note').val());
                    }
                    ,btn2: function(index, layero){
                        realNameReview('";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_real_names_review");
        echo "',data.id,'";
        echo twig_escape_filter($this->env, twig_constant("App\\Common\\Model\\User\\RealNameAuthenticationInfo::IDENTITY_STATUS_FAILED"), "html", null, true);
        echo "',\$('#note').val());
                    }
                    ,btn3: function(index, layero){
                        \$('#review-content-bussniss').hide();
                    }
                    ,cancel: function(){
                        \$('#review-content-bussniss').hide();
                    }
                });
            }
        }
    });

    /**
     * 实名认证审核
     * @param url           // 请求url
     * @param checked_ids   // 选中的项目id
     * @param type          // 指定或取消 2,1
     */
    /*function realNameReview(url,checked_ids,type){
        if (checked_ids.length == 0) {
            nxwd.showMsg('至少选择一条记录');
            return false;
        }
        if (type == '' || typeof type == 'undefined' || type == null) {
            nxwd.showMsg('参数有误');
            return false;
        }

        layer.confirm('你确定要执行该操作吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            var loading = null;
            var before = function(){
                loading = layer.load();
            }
            var error = function(){
                layer.close(loading);
                nxwd.showMsg('服务器未响应，请稍后重试');
            }
            var success = function(res){
                layer.close(loading);
                if (res.status) {
                    nxwd.showMsg(res.msg,'success');
                    location.reload();
                } else {
                    nxwd.showMsg(res.msg,'danger');
                }
            }
            nxwd.ajaxRequest(url,'POST',{ids:checked_ids,type:type},'json',success,before,error);
        });
    }*/

    /**
     * 实名认证审核
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 通过或不通过 SUCCESS,FAIL
     * @param note          // 审核说明
     */
    function realNameReview(url,id,status,note){

        if (id === '' || typeof id === 'undefined' || id == null || status === '' || typeof status === 'undefined' || status == null) {
            nxwd.showMsg('参数有误');
            return false;
        }

        var loading = null;
        var before = function(){
            loading = layer.load();
        }
        var error = function(){
            layer.close(loading);
            nxwd.showMsg('服务器未响应，请稍后重试');
        }
        var success = function(res){
            layer.close(loading);
            if (res.status) {
                nxwd.showMsg(res.msg,'success');
                location.reload();
            } else {
                nxwd.showMsg(res.msg,'danger');
            }
        }
        nxwd.ajaxRequest(url,'POST',{id:id,status:status,note:note},'json',success,before,error);
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Audit/real_name_list_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 95,  141 => 92,  102 => 58,  94 => 55,  74 => 38,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    var types = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPES\")|json_encode|raw }}');
    var review_statuses = JSON.parse('{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\RealNameAuthenticationInfo::STATUSES\")|json_encode|raw }}');
    var url = \"\";
    var columns = [[
        {\"field\": \"id\", \"title\": \"实名认证记录编号\", \"width\": 150},
        {
            \"field\": \"status\", \"title\": \"审核状态\", \"width\": 150, templet: function (d) {
                return review_statuses[d.status];
            }
        },
        {\"field\": \"account\", \"title\": \"狐豆名\", \"width\": 150},
        {\"field\": \"pass\", \"title\": \"通行证账号\", \"width\": 150},
        {
            \"field\": \"entity_type\", \"title\": \"通行证类型\", \"width\": 150, templet: function (d) {
                return types[d.entity_type];
            }
        },
        {\"field\": \"note\", \"title\": \"审核说明\", \"width\": 400},
        {\"field\": \"add_time\", \"title\": \"创建时间\", templet: \"#add_time\"},
        {\"field\": \"finish_time\", \"title\": \"处理时间\", templet: \"#finish_time\"},
        {\"field\": \"actions\", \"title\": \"操作\", \"toolbar\": \"#actions\", \"width\": 100}
    ]];

    function get_data() {
        var params = \$('form#real-name-list').serialize();
        url = '?' + params;
        rander_table('#real-name-table', url, columns);
    }

    // 初始化
    get_data();
    table.on('tool(real-name-table)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
        var data = obj.data; //获得当前行数据
        var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

        if (layEvent === 'review') { //审核
            if (data.entity_type === '{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\User::TYPE_INDIVIDUAL\") }}') {
                \$('#business_name-individual').text(data.business_name);
                \$('#business_license_no-individual').text(data.business_license_no);
                \$('#legal_person_address-individual').text(data.legal_person_address);
                \$('#positive-individual').text(data.positive);
                \$('#negative-individual').text(data.negative);
                \$('#hand-individual').text(data.hand);
                \$('#card_valid_time-individual').text(data.card_valid_time);
                layer.open({
                    type: 1
                    ,title: '实名认证审核'
                    ,area: ['700px','600px']
                    ,btn: ['审核通过', '审核不通过', '返回']
                    ,btnAlign: 'c'
                    ,content: \$('#review-content-individual')
                    ,yes: function(index, layero){
                        layer.close(index);
                        realNameReview('{{ path(\"admin_audit_real_names_review\") }}',data.id,'{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\RealNameAuthenticationInfo::IDENTITY_STATUS_VERIFIED\") }}',\$('#note-individual').val());
                    }
                    ,btn2: function(index, layero){
                        realNameReview('{{ path(\"admin_audit_real_names_review\") }}',data.id,'{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\RealNameAuthenticationInfo::IDENTITY_STATUS_FAILED\") }}',\$('#note-individual').val());
                    }
                    ,btn3: function(index, layero){
                        \$('#review-content-individual').hide();
                    }
                    ,cancel: function(){
                        \$('#review-content-individual').hide();
                    }
                });
            } else {
                \$('#business_name').text(data.business_name);
                \$('#user_type').text(types[data.type]);
                \$('#business_license_no').text(data.business_license_no);
                \$('#province_city_district').text(data.province_name+data.city_name);
                \$('#business_address').text(data.business_address);
                \$('#business_scope').text(data.business_scope);
                \$('#business_license_photo').attr('src',data.business_license_photo);
                \$('#license_valid_time').text(data.license_valid_time);
                \$('#legal_person_name').text(data.legal_person_name);
                \$('#identity_card_no').text(data.identity_card_no);
                \$('#legal_person_address').text(data.legal_person_address);
                \$('#card_valid_time').text(data.card_valid_time);
                \$('#positive').attr('src',data.positive);
                \$('#negative').attr('src',data.negative);
                \$('#hand').attr('src',data.hand);
                layer.open({
                    type: 1
                    ,title: '开户申请审核'
                    ,area: ['730px','550px']
                    ,btn: ['审核通过', '审核不通过', '返回']
                    ,btnAlign: 'c'
                    ,content: \$('#review-content-bussniss')
                    ,yes: function(index, layero){
                        layer.close(index);
                        realNameReview('{{ path(\"admin_audit_real_names_review\") }}',data.id,'{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\RealNameAuthenticationInfo::IDENTITY_STATUS_VERIFIED\") }}',\$('#note').val());
                    }
                    ,btn2: function(index, layero){
                        realNameReview('{{ path(\"admin_audit_real_names_review\") }}',data.id,'{{ constant(\"App\\\\Common\\\\Model\\\\User\\\\RealNameAuthenticationInfo::IDENTITY_STATUS_FAILED\") }}',\$('#note').val());
                    }
                    ,btn3: function(index, layero){
                        \$('#review-content-bussniss').hide();
                    }
                    ,cancel: function(){
                        \$('#review-content-bussniss').hide();
                    }
                });
            }
        }
    });

    /**
     * 实名认证审核
     * @param url           // 请求url
     * @param checked_ids   // 选中的项目id
     * @param type          // 指定或取消 2,1
     */
    /*function realNameReview(url,checked_ids,type){
        if (checked_ids.length == 0) {
            nxwd.showMsg('至少选择一条记录');
            return false;
        }
        if (type == '' || typeof type == 'undefined' || type == null) {
            nxwd.showMsg('参数有误');
            return false;
        }

        layer.confirm('你确定要执行该操作吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            var loading = null;
            var before = function(){
                loading = layer.load();
            }
            var error = function(){
                layer.close(loading);
                nxwd.showMsg('服务器未响应，请稍后重试');
            }
            var success = function(res){
                layer.close(loading);
                if (res.status) {
                    nxwd.showMsg(res.msg,'success');
                    location.reload();
                } else {
                    nxwd.showMsg(res.msg,'danger');
                }
            }
            nxwd.ajaxRequest(url,'POST',{ids:checked_ids,type:type},'json',success,before,error);
        });
    }*/

    /**
     * 实名认证审核
     * @param url           // 请求url
     * @param id            // 项目ID
     * @param status        // 通过或不通过 SUCCESS,FAIL
     * @param note          // 审核说明
     */
    function realNameReview(url,id,status,note){

        if (id === '' || typeof id === 'undefined' || id == null || status === '' || typeof status === 'undefined' || status == null) {
            nxwd.showMsg('参数有误');
            return false;
        }

        var loading = null;
        var before = function(){
            loading = layer.load();
        }
        var error = function(){
            layer.close(loading);
            nxwd.showMsg('服务器未响应，请稍后重试');
        }
        var success = function(res){
            layer.close(loading);
            if (res.status) {
                nxwd.showMsg(res.msg,'success');
                location.reload();
            } else {
                nxwd.showMsg(res.msg,'danger');
            }
        }
        nxwd.ajaxRequest(url,'POST',{id:id,status:status,note:note},'json',success,before,error);
    }
</script>
", "Admin/Audit/real_name_list_js.twig", "D:\\phpStudy\\WWW\\foxdou\\templates\\Admin\\Audit\\real_name_list_js.twig");
    }
}