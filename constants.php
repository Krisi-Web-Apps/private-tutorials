<?php

$NAV_ITEMS = array(
  "home" => array(
    "name" => "home",
    "url" => "/",
    "label" => "Начало",
  ),
  "about" => array(
    "name" => "about",
    "url" => "/about",
    "label" => "За мен",
  ),
  "how_to_begin" => array(
    "name" => "how_to_begin",
    "url" => "/how_to_begin",
    "label" => "Как да започнете",
    "children" => array(
      "enrollment_plan" => array(
        "name" => "enrollment_plan",
        "url" => "/enrollment_plan",
        "label" => "Процес на записване",
      ),
      "lession_preparation" => array(
        "name" => "enrollment_terms",
        "url" => "/enrollment_terms",
        "label" => "Условия за записване",
      ),
      "curriculum" => array(
        "name" => "curriculum",
        "url" => "/curriculum",
        "label" => "Учебна програма",
      ),
    )
  ),
  "courses" => array(
    "name" => "courses",
    "url" => "/courses",
    "label" => "Курсове",
    "children" => array(
      "html_basics" => array(
        "name" => "html_basics",
        "url" => "/html_basics",
        "label" => "Основи на HTML",
      ),
      "css_basics" => array(
        "name" => "css_basics",
        "url" => "/css_basics",
        "label" => "Основи на CSS",
      ),
      "js_basics" => array(
        "name" => "js_basics",
        "url" => "/js_basics",
        "label" => "Основи на JavaScript",
      ),
      "php_basics" => array(
        "name" => "php_basics",
        "url" => "/php_basics",
        "label" => "Основи на PHP",
      ),
    ),
  ),
  "resources" => array(
    "name" => "resources",
    "url" => "/resources",
    "label" => "Ресурси",
    "children" => array(
      "recommended_reading" => array(
        "name" => "recommended_reading",
        "url" => "/recommended_reading",
        "label" => "Препоръчителна литература",
      ),
      "study_materials" => array(
        "name" => "study_materials",
        "url" => "/study_materials",
        "label" => "Учебни материали",
      ),
      "examples_and_exercises" => array(
        "name" => "examples_and_exercises",
        "url" => "/examples_and_exercises",
        "label" => "Примери и упражнения",
      ),
    ),
  ),
  "blog" => array(
    "name" => "blog",
    "url" => "/blog",
    "label" => "Блог",
    "children" => array(
      "tips_and_tricks" => array(
        "name" => "tips_and_tricks",
        "url" => "/tips_and_tricks",
        "label" => "Съвети и трикове",
      ),
      "news" => array(
        "name" => "news",
        "url" => "/news",
        "label" => "Новини",
      ),
    ),
  ),
  "portfolio" => array(
    "name" => "portfolio",
    "url" => "/portfolio",
    "label" => "Портфолио",
    "children" => array(
      "personal_projects" => array(
        "name" => "personal_projects",
        "url" => "/personal_projects",
        "label" => "Лични проекти",
      ),
      "skills" => array(
        "name" => "skills",
        "url" => "/skills",
        "label" => "Умения",
      )
    )
  ),
  "faq" => array(
    "name" => "faq",
    "url" => "/faq",
    "label" => "ЧЗВ",
    "children" => array(
      "faq_answers" => array(
        "name" => "faq_answers",
        "url" => "/faq_answers",
        "label" => "Отговори",
      ),
      "prices_info" => array(
        "name" => "prices_info",
        "url" => "/prices_info",
        "label" => "Цени",
      ),
      "enrollment_terms" => array(
        "name" => "enrollment_terms",
        "url" => "/enrollment_terms",
        "label" => "Условия за записване",
      )
    )
  ),
  "contacts" => array(
    "name" => "contacts",
    "url" => "/contacts",
    "label" => "Контакти",
  ),
);
