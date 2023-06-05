<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/generate/templates/generate.html.twig */
class __TwigTemplate_c7a3f3e588f22794f9cbbab1bf172b16 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("generate/generate-style"), "html", null, true);
        echo "
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("generate/fontawesome"), "html", null, true);
        echo "

";
        // line 4
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
  <div class=\"resume\">
    <div class=\"header\">
      <h3>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</h3>
      <h4>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "profession", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</h4>
    </div>
    <div class=\"page\">
      <div class=\"left-section\">
        <div class=\"section\">
          <h2>My Contact</h2>
          <div class=\"section-content\">
            <ul>
              <li><i class=\"fas fa-envelope\"></i> ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "email", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</li>
              <li><i class=\"fas fa-phone\"></i> ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "phoneNo", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</li>
              <li><i class=\"fas fa-map-marker-alt\"></i> ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "address", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</li>
              <li><i class=\"fas fa-globe\"></i> ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "website", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>

        <div class=\"section\">
          <h2>Skills</h2>
          <div class=\"section-content\">
            <ul>
              <!-- Skills details -->
              ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "skills", [], "any", false, false, true, 30), ","));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 31
            echo "                <li>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter($this->sandbox->ensureToStringAllowed($context["skill"], 31, $this->source)), "html", null, true);
            echo "</li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </ul>
          </div>
        </div>

        <div class=\"section\">
          <h2>Educational Background</h2>
          <div class=\"section-content\">
            
            <div class=\"timeline\">
              <div class=\"timeline-item\">
                <div class=\"timeline-date\">";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "high_school_pyear", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "</div>
                <div class=\"timeline-content\">
                  <h3>";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "high_school_name", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "</h3>
                  <h5> High School</h5>
                  <p>Mark scored: ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "high_school_marks", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</p>
                </div>
              </div>

              <div class=\"timeline-item\">
                <div class=\"timeline-date\">";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "higher_secondary_pyear", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "</div>
                <div class=\"timeline-content\">
                  <h3>";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "higher_secondary_sname", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "</h3>
                  <h5>HigherSecondary</h5>
                  <p>Mark scored: ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "higher_secondary_marks", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "</p>
                </div>
              </div>

              <div class=\"timeline-item\">
                <div class=\"timeline-date\">";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "graduation_passing_year", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "</div>
                <div class=\"timeline-content\">
                  <h3>";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "graduation_college_name", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "</h3>
                  <h5>Graduation</h5>
                  <p>CGPA: ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "graduation_cgpa", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "</p>
                </div>
              </div>

              ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "post_graduation", [], "any", false, false, true, 69) == "yes")) {
            // line 70
            echo "                <div class=\"timeline-item\">
                  <div class=\"timeline-date\">";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "post_graduation_pyear", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "</div>
                  <div class=\"timeline-content\">
                    <h3>";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "post_graduation_cname", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "</h3>
                    <h5>Post Graduation</h5>
                    <p>CGPA: ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "post_graduation_marks", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "</p>
                  </div>
                </div>
              ";
        }
        // line 79
        echo "
              <!-- Add more timeline items for additional educational details -->
            </div>

          </div>
        </div>

      </div>

      <div class=\"right-section\">
        <div class=\"section\">
          <h2>About Me</h2>
          <div class=\"section-content\">
            <!-- About Me content -->
          </div>
        </div>

        <div class=\"section\">
          <h2>Achievements</h2>
          <div class=\"section-content\">
            <ul>
              <!-- Achievements details -->
            </ul>
          </div>
        </div>

        
        <div class=\"section\">
          <h2>Professional Experience</h2>
          <div class=\"section-content\">
            <ul class=\"experience-list\">
              <li>
                <h3>";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "cname", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "</h3>
                <div class=\"experience-details\">
                  <div class=\"experience-date\">";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "cyear", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "</div>
                  <div class=\"experience-role\">";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "crole", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "</div>
                  <p>";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description1"] ?? null), 115, $this->source), "html", null, true);
        echo "</p>
                </div>
              </li>

              <!-- Add more list items for additional professional experience -->
            </ul>

            
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/generate/templates/generate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 115,  244 => 114,  240 => 113,  235 => 111,  201 => 79,  194 => 75,  189 => 73,  184 => 71,  181 => 70,  179 => 69,  172 => 65,  167 => 63,  162 => 61,  154 => 56,  149 => 54,  144 => 52,  136 => 47,  131 => 45,  126 => 43,  114 => 33,  105 => 31,  101 => 30,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  65 => 9,  61 => 8,  56 => 5,  49 => 4,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/generate/templates/generate.html.twig", "C:\\xampp\\htdocs\\resume_builder\\resume_builder\\modules\\custom\\generate\\templates\\generate.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 4, "for" => 30, "if" => 69);
        static $filters = array("escape" => 1, "split" => 30, "trim" => 31);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'if'],
                ['escape', 'split', 'trim'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
