<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ed2fa1ed827bb949714406e94f4c90a7bedaeae24384374d813b9ce027abda9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_horizontal_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3157a56fdd4192a6f25a4a2ae97cc536c98334114455bb503f057a93512d789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3157a56fdd4192a6f25a4a2ae97cc536c98334114455bb503f057a93512d789->enter($__internal_a3157a56fdd4192a6f25a4a2ae97cc536c98334114455bb503f057a93512d789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_horizontal_layout.html.twig"));

        // line 26
        $this->displayBlock('form_start', $context, $blocks);
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('form_label', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 47
        echo "
";
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_row', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('radio_row', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('submit_row', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_a3157a56fdd4192a6f25a4a2ae97cc536c98334114455bb503f057a93512d789->leave($__internal_a3157a56fdd4192a6f25a4a2ae97cc536c98334114455bb503f057a93512d789_prof);

    }

    // line 26
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_0be6f73c41b1688e8a41700336eacc91b3dd1911a12678e9e1c4b5daabe03fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be6f73c41b1688e8a41700336eacc91b3dd1911a12678e9e1c4b5daabe03fa7->enter($__internal_0be6f73c41b1688e8a41700336eacc91b3dd1911a12678e9e1c4b5daabe03fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 27
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 28
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_0be6f73c41b1688e8a41700336eacc91b3dd1911a12678e9e1c4b5daabe03fa7->leave($__internal_0be6f73c41b1688e8a41700336eacc91b3dd1911a12678e9e1c4b5daabe03fa7_prof);

    }

    // line 33
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_03a1c32b3b8985f039ac828a0baba5e96c4bb0e2d4187631f01f5017e302c7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a1c32b3b8985f039ac828a0baba5e96c4bb0e2d4187631f01f5017e302c7c9->enter($__internal_03a1c32b3b8985f039ac828a0baba5e96c4bb0e2d4187631f01f5017e302c7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 34
        ob_start();
        // line 35
        echo "        ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 36
            echo "            <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
        ";
        } else {
            // line 38
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 39
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        // line 41
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_03a1c32b3b8985f039ac828a0baba5e96c4bb0e2d4187631f01f5017e302c7c9->leave($__internal_03a1c32b3b8985f039ac828a0baba5e96c4bb0e2d4187631f01f5017e302c7c9_prof);

    }

    // line 44
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_3b22499b97233e9b637f1e26a2549c682532748e310d774d507cf219cc0c0720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b22499b97233e9b637f1e26a2549c682532748e310d774d507cf219cc0c0720->enter($__internal_3b22499b97233e9b637f1e26a2549c682532748e310d774d507cf219cc0c0720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 45
        echo "col-sm-2";
        
        $__internal_3b22499b97233e9b637f1e26a2549c682532748e310d774d507cf219cc0c0720->leave($__internal_3b22499b97233e9b637f1e26a2549c682532748e310d774d507cf219cc0c0720_prof);

    }

    // line 50
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_eaad0d60972f2914081f4fbacfa446b7890078bdbc5ed41cc21dfa31cefd2801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaad0d60972f2914081f4fbacfa446b7890078bdbc5ed41cc21dfa31cefd2801->enter($__internal_eaad0d60972f2914081f4fbacfa446b7890078bdbc5ed41cc21dfa31cefd2801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 51
        ob_start();
        // line 52
        echo "        <div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            <div class=\"";
        // line 54
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eaad0d60972f2914081f4fbacfa446b7890078bdbc5ed41cc21dfa31cefd2801->leave($__internal_eaad0d60972f2914081f4fbacfa446b7890078bdbc5ed41cc21dfa31cefd2801_prof);

    }

    // line 62
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4bcbe844e7ee872049735bc28df5b36324954ea4a2386a2465db665f51a04af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bcbe844e7ee872049735bc28df5b36324954ea4a2386a2465db665f51a04af8->enter($__internal_4bcbe844e7ee872049735bc28df5b36324954ea4a2386a2465db665f51a04af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_4bcbe844e7ee872049735bc28df5b36324954ea4a2386a2465db665f51a04af8->leave($__internal_4bcbe844e7ee872049735bc28df5b36324954ea4a2386a2465db665f51a04af8_prof);

    }

    // line 66
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b570538de7ef224b79258f1d778dcbc7d79dd01f290f8e5d6aa69fe8fb75817d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b570538de7ef224b79258f1d778dcbc7d79dd01f290f8e5d6aa69fe8fb75817d->enter($__internal_b570538de7ef224b79258f1d778dcbc7d79dd01f290f8e5d6aa69fe8fb75817d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 67
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_b570538de7ef224b79258f1d778dcbc7d79dd01f290f8e5d6aa69fe8fb75817d->leave($__internal_b570538de7ef224b79258f1d778dcbc7d79dd01f290f8e5d6aa69fe8fb75817d_prof);

    }

    // line 70
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_4275803bc6ccc26416c28702c14566f696f3131d9ba808bf10b70930c651053d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4275803bc6ccc26416c28702c14566f696f3131d9ba808bf10b70930c651053d->enter($__internal_4275803bc6ccc26416c28702c14566f696f3131d9ba808bf10b70930c651053d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 71
        ob_start();
        // line 72
        echo "        <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
            <div class=\"";
        // line 73
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 74
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4275803bc6ccc26416c28702c14566f696f3131d9ba808bf10b70930c651053d->leave($__internal_4275803bc6ccc26416c28702c14566f696f3131d9ba808bf10b70930c651053d_prof);

    }

    // line 82
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_3ef4bcae292180169bb68034de4eb9f52d2bc235a33a1760c3f35f55279eda23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef4bcae292180169bb68034de4eb9f52d2bc235a33a1760c3f35f55279eda23->enter($__internal_3ef4bcae292180169bb68034de4eb9f52d2bc235a33a1760c3f35f55279eda23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 83
        ob_start();
        // line 84
        echo "        <div class=\"form-group\">
            <div class=\"";
        // line 85
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 86
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3ef4bcae292180169bb68034de4eb9f52d2bc235a33a1760c3f35f55279eda23->leave($__internal_3ef4bcae292180169bb68034de4eb9f52d2bc235a33a1760c3f35f55279eda23_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_4430429398fd42a2aff2c80489c50e33cabf33094c7a532b24207f0135f1904a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4430429398fd42a2aff2c80489c50e33cabf33094c7a532b24207f0135f1904a->enter($__internal_4430429398fd42a2aff2c80489c50e33cabf33094c7a532b24207f0135f1904a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-10";
        
        $__internal_4430429398fd42a2aff2c80489c50e33cabf33094c7a532b24207f0135f1904a->leave($__internal_4430429398fd42a2aff2c80489c50e33cabf33094c7a532b24207f0135f1904a_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  296 => 94,  290 => 93,  278 => 87,  274 => 86,  270 => 85,  267 => 84,  265 => 83,  259 => 82,  247 => 76,  243 => 75,  239 => 74,  235 => 73,  228 => 72,  226 => 71,  220 => 70,  213 => 67,  207 => 66,  200 => 63,  194 => 62,  182 => 56,  178 => 55,  174 => 54,  170 => 53,  163 => 52,  161 => 51,  155 => 50,  148 => 45,  142 => 44,  134 => 41,  131 => 39,  128 => 38,  122 => 36,  119 => 35,  117 => 34,  111 => 33,  104 => 28,  102 => 27,  96 => 26,  89 => 93,  86 => 92,  84 => 82,  81 => 81,  79 => 70,  76 => 69,  74 => 66,  71 => 65,  69 => 62,  66 => 61,  64 => 50,  61 => 49,  58 => 47,  56 => 44,  53 => 43,  51 => 33,  48 => 32,  45 => 30,  43 => 26,  14 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% use \"PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig\" %}
{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {% spaceless %}
        {% if label is same as(false) %}
            <div class=\"{{ block('form_label_class') }}\"></div>
        {% else %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
            {{- parent() -}}
        {% endif %}
    {% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
    col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {% spaceless %}
        <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
            {{ form_label(form) }}
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
                {{ form_errors(form) }}
            </div>
        </div>
    {% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
    {% spaceless %}
        <div class=\"form-group{% if not valid %} has-error{% endif %}\">
            <div class=\"{{ block('form_label_class') }}\"></div>
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
                {{ form_errors(form) }}
            </div>
        </div>
    {% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
    {% spaceless %}
        <div class=\"form-group\">
            <div class=\"{{ block('form_label_class') }}\"></div>
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
            </div>
        </div>
    {% endspaceless %}
{% endblock submit_row %}

{% block form_group_class -%}
    col-sm-10
{%- endblock form_group_class %}
", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_horizontal_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_3_horizontal_layout.html.twig");
    }
}
