<?php

use App\Models\User;
use Carbon\Carbon;

if (!function_exists('v_image')) {
    function v_image($ext = null)
    {
        return ($ext === null) ? 'mimes:jpg,png,jpeg,png,gif,bmp' : 'mimes:' . $ext;
    }
}

if (!function_exists('getMainTitle')) {
    function getMainTitle($type = 'customer')
    {
        $default = app()->getLocale() == 'en' ? 'Wakeb' : 'واكب';
        $key = $type == 'admin' ? 'setting_admin' : 'setting';
        return app($key)['web_information']['company_name'] ?? $default;
    }
}

if (!function_exists('handleLogo')) {
    function handleLogo($type = 'customer')
    {
        $default = asset('dashboard_assets/logo/logo.png');
        $key = $type == 'admin' ? 'setting_admin' : 'setting';
        $logo = app($key)['web_properties']['website_logo_small'];
        return $logo ? resolvePhoto($logo, 'nonoe') : $default;
    }
}

if (!function_exists('handleLoaderIcon')) {
    function handleLoaderIcon($type = 'customer')
    {
        $default = asset('dashboard_assets/logo/Wakeb-icon.png');
        $key = $type == 'admin' ? 'setting_admin' : 'setting';
        $logo = app($key)['web_properties']['website_fav_icon'] ?? false;
        return $logo ? resolvePhoto($logo, 'nonoe') : $default;
    }
}

if (!function_exists('resolveDateTime')) {
    function resolveDateTime($date, $time)
    {
        try {
            if (is_null($date)) {
                $date = carbon()->now()->toDateString();
            }
            $date = new DateTime($date . ' ' . $time);
        } catch (Exception $ex) {
            $time = date('H:i', mktime(0, 0, $time));
            $date = new DateTime($date . ' ' . $time);
        }

        $new_time = $date->format('Y-m-d H:i');

        return Carbon::parse($new_time);
    }
}

if (!function_exists('diffInMinutesHelper')) {
    function diffInMinutesHelper($start_time, $end_time)
    {
        $interval = $start_time->diff($end_time);
        $hours = $interval->format('%h');
        $minutes = $interval->format('%i');
        return $hours * 60 + $minutes;
    }
}

if (!function_exists('dateFormat')) {
    function dateFormat($date): string
    {
        return !is_numeric($date)
            ? Carbon::parse($date)->format('j F Y')
            : '----';
    }
}

if (!function_exists('timeFormat')) {
    function timeFormat($time): string
    {
        return Carbon::parse($time)->format('h:i a');
    }
}

if (!function_exists('resolveLang')) {
    function resolveLang($name)
    {
        if (is_array($name)) {
            $result = $name[getLang()];
            if (!$result) {
                $result = $name[(getLang() === 'en') ? 'ar' : 'en'];
            }

            return $result;
        }
        return $name;
    }
}

if (!function_exists('getFileDir')) {
    function getFileDir()
    {
        return (getLang() === 'en') ? '' : 'rtl.';
    }
}

if (!function_exists('unKnownError')) {
    function unKnownError($message = null)
    {
        $message = trans('dashboard.something_error') . '' . (env('APP_DEBUG') ? " : $message" : '');

        return request()->expectsJson()
            ? response()->json(['message' => $message], 400)
            : redirect()->back()->with(['status' => 'error', 'message' => $message]);
    }
}


if (!function_exists('resolvePhoto')) {
    function resolvePhoto($image = null, $type = 'user')
    {
        $result = ($type === 'user'
            ? asset('dashboard_assets/media/users/default.jpg')
            : asset('dashboard_assets/media/blank.jpg'));


        if (is_null($image)) {
            return $result;
        }

        return Storage::disk('public')->exists($image)
            ? Storage::disk('public')->url($image)
            : $result;

    }
}


if (!function_exists('userRoot')) {
    function userRoot()
    {
        return User::find(1);
    }
}

if (!function_exists('getLang')) {
    function getLang()
    {
        return app()->getLocale();
    }
}

if (!function_exists('primaryID')) {
    function primaryID($id = null)
    {
        $user = $id ? User::find($id) : auth()->user();
        return auth()->user()->parent_id ?? optional($user)->id;
    }
}

function addCondationTime($item, $type)
{
    if ($type == 1) {
        return round($item / 60, 2);
    }

    if ($type == 2) {
        return round(($item / 60) / 24, 2);
    }

    if ($type == 3) {
        return round($item * 60, 2);
    }

    if ($type == 4) {
        return round($item * 60 * 24, 2);
    }
}

function timeMap($data, $type)
{
    return array_map(function ($item) use ($type) {
        return is_numeric($item) ? addCondationTime($item, $type) : $item;
    }, $data);
}

if (!function_exists('handleTimeUnit')) {
    function handleTimeUnit($time = 0, $to = 'miunte', $from = 'minute')
    {
        if ($time == 0) {
            return $time;
        }

        if ($to == 'minute' && $from == 'minute') {
            return $time;
        }

        $return_ype = 'array';

        if (!is_array($time)) {
            $return_ype = 'string';
            $time = [$time];
        }

        if ($to == 'hour' && $from == 'minute') {
            $result = timeMap($time, 1);
            return $return_ype == 'array' ? $result : Arr::first($result);
        }

        if ($to == 'day' && $from == 'minute') {
            $result = timeMap($time, 2);
            return $return_ype == 'array' ? $result : Arr::first($result);
        }

        if ($from == 'hour' && $to == 'minute') {
            $result = timeMap($time, 3);
            return $return_ype == 'array' ? $result : Arr::first($result);
        }

        if ($from == 'day' && $to == 'minute') {
            $result = timeMap($time, 4);
            return $return_ype == 'array' ? $result : Arr::first($result);
        }
    }
}

if (!function_exists('Primary')) {
    function Primary()
    {
        return auth()->user()->parent_id ? User::find(auth()->user()->parent_id) : auth()->user();
    }
}

if (!function_exists('isRoot')) {
    function isRoot(): bool
    {
        return auth()->id() == 1 && is_null(auth()->user()->parent_id);
    }
}


if (!function_exists('active')) {

    function active(...$items): string
    {
        $className = '';

        foreach ($items as $item) {
            if (request()->is("*/$item") || request()->is("*/$item/*")) {
                $className = 'menu-item-active';
                break;
            }
        }
        return $className;
    }
}

if (!function_exists('inputError')) {

    function inputError($name)
    {
        if (session('errors')) {

            return session('errors')->has($name) ? 'is-invalid' : '';
        }
    }
}

if (!function_exists('msgError')) {

    function msgError($name)
    {
        if (session('errors')) {

            return session('errors')->has($name) ? session('errors')->first($name) : '';
        }
    }
}
if (!function_exists('carbon')) {

    function carbon(): \Illuminate\Support\Carbon
    {
        return new \Illuminate\Support\Carbon;
    }
}
if (!function_exists('is_base64')) {
    function is_base64($s): bool
    {
        return (bool)preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s);
    }
}

if (!function_exists('updateDotEnv')) {
    function updateDotEnv($key, $newValue, $delim = '')
    {

        $path = base_path('.env');
        // get old value from current env
        $oldValue = env($key);

        // was there any change?
        if ($oldValue === $newValue) {
            return;
        }

        // rewrite file content with changed data
        if (file_exists($path)) {
            // replace current value with new value
            file_put_contents(
                $path, str_replace(
                    $key . '=' . $delim . $oldValue . $delim,
                    $key . '=' . $delim . $newValue . $delim,
                    file_get_contents($path)
                )
            );
        }
    }
}

if (!function_exists('updateDotEnv')) {
    function updateDotEnv($key, $newValue, $delim = '')
    {

        $path = base_path('.env');
        // get old value from current env
        $oldValue = env($key);

        // was there any change?
        if ($oldValue === $newValue) {
            return;
        }

        // rewrite file content with changed data
        if (file_exists($path)) {
            // replace current value with new value
            file_put_contents(
                $path, str_replace(
                    $key . '=' . $delim . $oldValue . $delim,
                    $key . '=' . $delim . $newValue . $delim,
                    file_get_contents($path)
                )
            );
        }
    }
}


if (!function_exists('returnError')) {

    function returnError($msg, $status = 400)
    {
        return response()->json([
            'data' => ['error' => $msg]
        ], $status);
    }
}

if (!function_exists('returnSuccess')) {
    function returnSuccess($msg, $status = 200)
    {
        return response()->json([
            'data' => ['msg' => $msg]
        ], $status);
    }
}

if (!function_exists('returnData')) {
    function returnData($data, $status = 200)
    {
        return response()->json([
            'data' => $data
        ], $status);
    }
}

if (!function_exists('returnPaginatedData')) {
    function returnPaginatedData($data, $extra = null, $status = 200)
    {

        $paginatedData = $data[0]->toArray();
        $data = [
            'data' => $paginatedData['data'],
            'paginate' => [
                'currentPage' => $paginatedData['current_page'],
                'lastPage' => $paginatedData['last_page'],
                'perPage' => $paginatedData['per_page'],
                'total' => $paginatedData['total']
            ],
        ];

        $extra ? $data += $extra : '';

        return response()->json([
            'data' => $data
        ], $status);
    }
}
if (!function_exists('image_path')) {

    function image_path($path = '')
    {
        return env('IMAGE_PATH') . $path;
    }
}



if (!function_exists('public_path')) {

    function public_path($path)
    {
        return env('PUBLIC_PATH', base_path('public')) . ($path ? '/' . $path : $path);
    }
}
