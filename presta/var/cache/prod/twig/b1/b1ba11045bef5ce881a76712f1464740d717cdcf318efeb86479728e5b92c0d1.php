<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_gift_options.html.twig */
class __TwigTemplate_9898954c01a2991d2ed3f94db6b077a5ec5761ae1301a2945eac1088b8f9eeed extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'order_preferences_gift_options' => [$this, 'block_order_preferences_gift_options'],
            'order_gift_options_preferences_form_rest' => [$this, 'block_order_gift_options_preferences_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_gift_options.html.twig", 27)->unwrap();
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('order_preferences_gift_options', $context, $blocks);
    }

    public function block_order_preferences_gift_options($context, array $blocks = [])
    {
        // line 30
        echo "<div class=\"col-xl-10\">
    <div class=\"card\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">cake</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gift options", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-block row\">
            <div class=\"card-text\">
                ";
        // line 37
        $this->displayBlock('order_gift_options_preferences_form_rest', $context, $blocks);
        // line 40
        echo "            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 37
    public function block_order_gift_options_preferences_form_rest($context, array $blocks = [])
    {
        // line 38
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["giftOptionsForm"] ?? null), 'rest');
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_gift_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 38,  76 => 37,  66 => 44,  60 => 40,  58 => 37,  51 => 33,  46 => 30,  40 => 29,  37 => 28,  35 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_gift_options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderPreferences/Blocks/order_preferences_gift_options.html.twig");
    }
}
