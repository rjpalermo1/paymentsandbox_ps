<?php

/* PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig */
class __TwigTemplate_cb3ed062170a77eb1f95240d001c803133ab56bc0d85cbfc32e86367caba1ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5607d1014da23bd0cdbd5ff1247e765632801e0c39679eaeb84cc1ad98a78f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5607d1014da23bd0cdbd5ff1247e765632801e0c39679eaeb84cc1ad98a78f08->enter($__internal_5607d1014da23bd0cdbd5ff1247e765632801e0c39679eaeb84cc1ad98a78f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig"));

        // line 25
        if (((isset($context["previous_url"]) ? $context["previous_url"] : $this->getContext($context, "previous_url")) || (isset($context["next_url"]) ? $context["next_url"] : $this->getContext($context, "next_url")))) {
            // line 26
            echo "<nav>
    <ul class=\"pagination\">
        <li class=\"page-item ";
            // line 28
            if ((isset($context["first_url"]) ? $context["first_url"] : $this->getContext($context, "first_url"))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 29
            if ((isset($context["first_url"]) ? $context["first_url"] : $this->getContext($context, "first_url"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["first_url"]) ? $context["first_url"] : $this->getContext($context, "first_url")), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">1</a>
        </li>
        <li class=\"page-item ";
            // line 31
            if ((isset($context["previous_url"]) ? $context["previous_url"] : $this->getContext($context, "previous_url"))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 32
            if ((isset($context["previous_url"]) ? $context["previous_url"] : $this->getContext($context, "previous_url"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["previous_url"]) ? $context["previous_url"] : $this->getContext($context, "previous_url")), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"page-link\" type=\"text\" style=\"width: 4em;\"
                   value=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "\" psurl=\"";
            echo twig_escape_filter($this->env, (isset($context["jump_page_url"]) ? $context["jump_page_url"] : $this->getContext($context, "jump_page_url")), "html", null, true);
            echo "\" psmax=\"";
            echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : $this->getContext($context, "page_count")), "html", null, true);
            echo "\" pslimit=\"";
            echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "html", null, true);
            echo "\" />
        </li>
        <li class=\"page-item ";
            // line 38
            if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) ? $context["next_url"] : $this->getContext($context, "next_url")) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" id=\"pagination_next_url\" ";
            // line 39
            if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) ? $context["next_url"] : $this->getContext($context, "next_url")) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["next_url"]) ? $context["next_url"] : $this->getContext($context, "next_url")), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&gt;</a>
        </li>
        <li class=\"page-item ";
            // line 41
            if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) ? $context["last_url"] : $this->getContext($context, "last_url")) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 42
            if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) ? $context["last_url"] : $this->getContext($context, "last_url")) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["last_url"]) ? $context["last_url"] : $this->getContext($context, "last_url")), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : $this->getContext($context, "page_count")), "html", null, true);
            echo "</a>
        </li>
    </ul>
</nav>
";
        }
        
        $__internal_5607d1014da23bd0cdbd5ff1247e765632801e0c39679eaeb84cc1ad98a78f08->leave($__internal_5607d1014da23bd0cdbd5ff1247e765632801e0c39679eaeb84cc1ad98a78f08_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 42,  95 => 41,  84 => 39,  77 => 38,  66 => 36,  53 => 32,  46 => 31,  35 => 29,  28 => 28,  24 => 26,  22 => 25,);
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
{% if previous_url or next_url %}
<nav>
    <ul class=\"pagination\">
        <li class=\"page-item {% if first_url %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" {% if first_url %}href=\"{{ first_url }}\"{% else %}nohref{% endif %}>1</a>
        </li>
        <li class=\"page-item {% if previous_url %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" {% if previous_url %}href=\"{{ previous_url }}\"{% else %}nohref{% endif %}>&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"page-link\" type=\"text\" style=\"width: 4em;\"
                   value=\"{{ current_page }}\" psurl=\"{{ jump_page_url }}\" psmax=\"{{ page_count }}\" pslimit=\"{{ limit }}\" />
        </li>
        <li class=\"page-item {% if next_url is defined and next_url != false %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" id=\"pagination_next_url\" {% if next_url is defined and next_url != false %}href=\"{{ next_url }}\"{% else %}nohref{% endif %}>&gt;</a>
        </li>
        <li class=\"page-item {% if last_url is defined and last_url != false %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" {% if last_url is defined and last_url != false %}href=\"{{ last_url }}\"{% else %}nohref{% endif %}>{{ page_count }}</a>
        </li>
    </ul>
</nav>
{% endif %}
", "PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/pagination_quicknav.html.twig");
    }
}
