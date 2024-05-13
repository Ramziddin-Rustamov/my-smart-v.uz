<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\VillageInfo;

class VerifyQuarterId
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if ($user && $user->quarter_id) {
            $villageInfo = VillageInfo::find($user->quarter_id);

            if (!$villageInfo) {
                return response("Sizni ma'lmutlaringizni saqlab oldik , sizning mahallangiz hali umumiy ruyxatdan o`tmagan, shuning uchun biz sizni keyingi bosqichga olib o`taolmaymiz, yaqin kunlarda mahallangiz ruyxatdan o`tib ma'lumotlari qo`shilsa siz hozirgi login va parolingiz orqali foydalana olasiz !", 403);
            }
        }

        return $next($request);
    }
}
