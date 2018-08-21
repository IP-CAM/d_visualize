<?php

class ModelExtensionDVisualizeTheme extends Model
{
    private $codename = 'd_visualize';

    public function installEvents()
    {

    }

    public function getRoute($name = 'd_visualize')
    {
        $results = array();
        if ($name == $this->codename)
            $file = DIR_CONFIG .  $name . '.php';
        else
            $file = DIR_CONFIG . $this->codename . '/' . $name . '.php';

        if (file_exists($file)) {
            $_ = array();
            require($file);
            $results = array_merge($results, $_);
        }
        if (!empty($results) && !isset($results['name'])) {
            $results['name'] = ucfirst(strtolower($name));
        }
        return $results;
    }

    public function getTemplateExtensions($skin_name)
    {
        //todo make this work
        //load json of active skin pack
        $modules_json = array();
        if (is_file(DIR_SYSTEM . 'library/d_shopunity/extension/' . $skin_name . '.json')) {
            $skin = json_decode(file_get_contents(DIR_SYSTEM . 'library/d_shopunity/extension/' . $skin_name . '.json'), true);
            if ($this->d_shopunity) {
                $this->load->model('extension/d_shopunity/mbooth');
                $this->model_extension_d_shopunity_mbooth->validateDependencies($skin['codename']);
            }
            foreach ($skin['required'] as $key => $version) {
                $module_json = json_decode(file_get_contents(DIR_SYSTEM . 'library/d_shopunity/extension/' . $key . '.json'), true);
                //install from json only modules not library
                if ($module_json['module'] == 'module' && $module_json['module'] != $this->codename) {
                    $modules_json[] = array(
                        'index'    => $module_json['index'],
                        'codename' => $module_json['codename'],
                    );
                }
            }
        }
        return $modules_json;

    }

}
