<?php
return [

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| Quyidagi til qatorlari validator sinfi tomonidan ishlatiladigan sukut xabarlarni o`z ichiga oladi
| Kelasi qoidalarning bir necha variantlari mavjud, masalan, hajmlar qoidalari. Bu xabarlarning har birini ozgartirish uchun bepul.
|
*/

'accepted' => ':Attribute qabul qilinishi kerak.',
'accepted_if' => ':Other qiymati :value bo`lgan paytda :Attribute qabul qilinishi kerak.',
'active_url' => ':Attribute haqiqiy URL emas.',
'after' => ':Attribute :date dan keyin bir sana bo`lishi kerak.',
'after_or_equal' => ':Attribute :date dan keyin yoki teng sana bo`lishi kerak.',
'alpha' => ':Attribute faqat harflarni o`z ichiga olishi kerak.',
'alpha_dash' => ':Attribute faqat harflar, sonlar, chiziqchalar va pastki chiziqchalar o`z ichiga olishi kerak.',
'alpha_num' => ':Attribute faqat harflarni va sonlarni o`z ichiga olishi kerak.',
'array' => ':Attribute massiv bo`lishi kerak.',
'before' => ':Attribute :date dan oldin bo`lishi kerak.',
'before_or_equal' => ':Attribute :date dan oldin yoki teng sana bo`lishi kerak.',
'between' => [
    'numeric' => ':Attribute :min va :max oralig`ida bo`lishi kerak.',
    'file' => ':Attribute :min va :max kilobayt oralig`ida bo`lishi kerak.',
    'string' => ':Attribute :min va :max belgi oraligida bo`lishi kerak.',
    'array' => ':Attribute :min va :max narsalari oralig`ida bo`lishi kerak.',
],
'boolean' => ':Attribute maydoni haqiqiy yoki yolg`on bo`lishi kerak.',
'confirmed' => ':Attribute tasdiqi mos kelmaydi.',
'current_password' => 'Noto`g`ri parol.',
'date' => ':Attribute haqiqiy sana emas.',
'date_equals' => ':Attribute :date ga teng sana bo`lishi kerak.',
'date_format' => ':Attribute formati :format bilan mos kelmaydi.',
'declined' => ':Attribute rad etilishi kerak.',
'declined_if' => ':Other :value bo`lgan paytda :Attribute rad etilishi kerak.',
'different' => ':Attribute va :other farqli bo`lishi kerak.',
'digits' => ':Attribute :digits raqam bo`lishi kerak.',
'digits_between' => ':Attribute :min va :max oralig`ida raqamlar bo`lishi kerak.',
'dimensions' => ':Attribute haqiqiy tasvir o`lchamlari emas.',
'distinct' => ':Attribute maydoni takrorlanuvchi qiymatga ega.',
'email' => ':Attribute to`g`ri elektron pochta manzili bo`lishi kerak.',
'ends_with' => ':Attribute quyidagilardan biri bilan tugashi kerak: :values.',
'enum' => 'Tanlangan :attribute yaroqsiz.',
'exists' => 'Tanlangan :attribute yaroqsiz.',
'file' => ':Attribute fayl bo`lishi kerak.',
'filled' => ':Attribute maydoni qiymatga ega bo`lishi kerak.',
'gt' => [
    'numeric' => ':Attribute :value dan katta bo`lishi kerak.',
    'file' => ':Attribute :value kilobaytdan katta bo`lishi kerak.',
    'string' => ':Attribute :value belgidan katta bo`lishi kerak.',
    'array' => ':Attribute :value narsadan ko`p bo`lishi kerak.',
],
'gte' => [
    'numeric' => ':Attribute :value dan katta yoki teng bo`lishi kerak.',
    'file' => ':Attribute :value kilobaytdan katta yoki teng bo`lishi kerak.',
    'string' => ':Attribute :value belgidan katta yoki teng bo`lishi kerak.',
    'array' => ':Attribute kamida :value narsa bo`lishi kerak.',
],
'image' => ':Attribute tasvir bo`lishi kerak.',
'in' => 'Tanlangan :attribute yaroqsiz.',
'in_array' => ':Attribute maydoni :other da mavjud emas.',
'integer' => ':Attribute butun son bo`lishi kerak.',
'ip' => ':Attribute haqiqiy IP manzil bo`lishi kerak.',
'ipv4' => ':Attribute haqiqiy IPv4 manzil bo`lishi kerak.',
'ipv6' => ':Attribute haqiqiy IPv6 manzil bo`lishi kerak.',
'json' => ':Attribute to`g`ri JSON qatori bo`lishi kerak.',
'lt' => [
    'numeric' => ':Attribute :value dan kichik bo`lishi kerak.',
    'file' => ':Attribute :value kilobaytdan kichik bo`lishi kerak.',
    'string' => ':Attribute :value belgidan kichik bo`lishi kerak.',
    'array' => ':Attribute :value narsadan kam bo`lishi kerak.',
],
'lte' => [
    'numeric' => ':Attribute :value dan kichik yoki teng bo`lishi kerak.',
    'file' => ':Attribute :value kilobaytdan kichik yoki teng bo`lishi kerak.',
    'string' => ':Attribute :value belgidan kichik yoki teng bo`lishi kerak.',
    'array' => ':Attribute :value narsadan ko`p bo`lishi mumkin emas.',
],
'mac_address' => ':Attribute haqiqiy MAC manzil bo`lishi kerak.',
'max' => [
    'numeric' => ':Attribute :max dan katta bo`lishi mumkin emas.',
    'file' => ':Attribute :max kilobaytdan katta bo`lishi mumkin emas.',
    'string' => ':Attribute :max belgidan katta bo`lishi mumkin emas.',
    'array' => ':Attribute :max narsadan ko`p bo`lishi mumkin emas.',
],
'mimes' => ':Attribute quyidagi turlardan biri bo`lishi kerak: :values.',
'mimetypes' => ':Attribute quyidagi turlardan biri bo`lishi kerak: :values.',
'min' => [
    'numeric' => ':Attribute kamida :min bo`lishi kerak.',
    'file' => ':Attribute kamida :min kilobayt bo`lishi kerak.',
    'string' => ':Attribute kamida :min belgi bo`lishi kerak.',
    'array' => ':Attribute kamida :min narsa bo`lishi kerak.',
],
'multiple_of' => ':Attribute :value ning ko`paytmasi bo`lishi kerak.',
'not_in' => 'Tanlangan :attribute yaroqsiz.',
'not_regex' => ':Attribute formati yaroqsiz.',
'numeric' => ':Attribute raqam bo`lishi kerak.',
'password' => 'Noto`g`ri parol.',
'present' => ':Attribute maydoni mavjud bo`lishi kerak.',
'prohibited' => ':Attribute maydoni taqiqlangan.',
'prohibited_if' => ':Other qiymati :value bo`lgan paytda :Attribute taqiqlangan.',
'prohibited_unless' => ':Attribute faqat :values da mavjud bo`lishi mumkin emas.',
'prohibits' => ':Attribute :other maydoni mavjud bo`lishiga taqiqlaydi.',
'regex' => ':Attribute formati yaroqsiz.',
'required' => ':Attribute maydoni talab qilinadi.',
'required_array_keys' => ':Attribute maydoni :values uchun kiritilgan qatorlarni o`z ichiga olishi kerak.',
'required_if' => ':Other qiymati :value bo`lgan paytda :Attribute maydoni talab qilinadi.',
'required_unless' => ':Attribute maydoni talab qilinadi :values da mavjud emas.',
'required_with' => ':Values mavjud bo`lganda :Attribute maydoni talab qilinadi.',
'required_with_all' => ':Values barchasi mavjud bo`lganda :Attribute maydoni talab qilinadi.',
'required_without' => ':Values mavjud bo`lmaganida :Attribute maydoni talab qilinadi.',
'required_without_all' => ':Values barchasi mavjud bo`lmaganida :Attribute maydoni talab qilinadi.',
'same' => ':Attribute va :other mos kelishi kerak.',
'size' => [
    'numeric' => ':Attribute :size bo`lishi kerak.',
    'file' => ':Attribute :size kilobayt bo`lishi kerak.',
    'string' => ':Attribute :size belgi bo`lishi kerak.',
    'array' => ':Attribute :size narsa bo`lishi kerak.',
],
'starts_with' => ':Attribute quyidagilardan biri bilan boshlanishi kerak: :values.',
'string' => ':Attribute qatori bo`lishi kerak.',
'timezone' => ':Attribute haqiqiy vaqt mintaqa bo`lishi kerak.',
'unique' => ':Attribute allaqachon olingan.',
'uploaded' => ':Attribute yuklanishi muvaffaqiyatsiz tugadi.',
'url' => ':Attribute formati yaroqsiz.',
'uuid' => ':Attribute haqiqiy UUID bo`lishi kerak.',

/*
|--------------------------------------------------------------------------
| Custom Validation Language Lines
|--------------------------------------------------------------------------
|
| Bu erda siz atributlar uchun maxsus tekshiruv xabarlarni nomlash qoidasi bo`ladigan
| "attribute.rule" shartini ishlatib, maxsus til qatorlarini kiritishingiz mumkin
| Har bir attribut sharti uchun maxsus til qatorini tezkor kiritishga yordam beradi.
|
*/

'custom' => [
    'attribute-name' => [
        'rule-name' => 'maxsus-xabar',
    ],
],

/*
|--------------------------------------------------------------------------
| Custom Validation Attributes
|--------------------------------------------------------------------------
|
| Quyidagi til qatorlari, "e-pochta" o`rniga "E-Pochta Manzili" kabi, attribut o`rnida
| tanlangan o`rniga yozuvni o`zgartirish uchun ishlatiladi. Bu oddiy xabarimizni izohli qilishga yordam beradi.
|
*/

'attributes' => [],

];
