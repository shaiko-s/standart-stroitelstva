@php
$menu_items = [
    'organization' => [
        'title' => 'Организация',
        'href' => '/organization',
        'icon' => [
            'clip' => 'clip0_208_605',
            'sizeViewBox' => [
                'w' => '70',
                'h' => '70'
            ],
            'path' => '
                      <path d="M66.9616 67.2447H64.8524V50.6682C64.8524 50.1134 64.4027 49.6637 63.848 49.6637C63.2932 49.6637 62.8435 50.1134 62.8435 50.6682V67.2447H51.3132V57.9684H57.0783C57.633 57.9684 58.0827 57.5187 58.0827 56.964C58.0827 56.4093 57.633 55.9596 57.0783 55.9596H51.3132V50.771H57.0783C57.633 50.771 58.0827 50.3213 58.0827 49.7666C58.0827 49.2118 57.633 48.7621 57.0783 48.7621H51.3132V43.5773H57.0783C57.633 43.5773 58.0827 43.1276 58.0827 42.5729C58.0827 42.0182 57.633 41.5684 57.0783 41.5684H51.3132V36.3836H57.0783C57.633 36.3836 58.0827 35.9339 58.0827 35.3792C58.0827 34.8245 57.633 34.3748 57.0783 34.3748H51.3132V28.4451H62.8435V46.3243C62.8435 46.879 63.2932 47.3287 63.848 47.3287C64.4027 47.3287 64.8524 46.879 64.8524 46.3243V28.3385C64.8524 27.2896 63.999 26.4362 62.9503 26.4362H61.0322V23.9145C61.0322 23.3598 60.5825 22.9101 60.0277 22.9101C59.473 22.9101 59.0233 23.3598 59.0233 23.9145V26.4362H55.7755V22.2526C55.7755 21.6979 55.3257 21.2482 54.771 21.2482C54.2163 21.2482 53.7666 21.6979 53.7666 22.2526V26.4362H51.3133V12.591H51.4245C52.2922 12.591 52.9981 11.885 52.9981 11.0173V6.83791C52.9981 5.9702 52.2922 5.26428 51.4245 5.26428H22.5387V3.15509C22.5387 2.60037 22.089 2.15064 21.5343 2.15064C20.9796 2.15064 20.5299 2.60037 20.5299 3.15509V5.26428H17.282V1.68806C17.282 1.13334 16.8323 0.683622 16.2776 0.683622C15.7229 0.683622 15.2731 1.13334 15.2731 1.68806V5.26415H11.5366C10.671 5.26415 9.96673 5.97007 9.96673 6.83777V11.0172C9.96673 11.8849 10.6709 12.5908 11.5366 12.5908H11.6515V40.6346C11.1897 40.5396 10.7152 40.4873 10.23 40.4873C5.79803 40.4873 2.19235 44.6225 2.19235 49.7054C2.19235 53.3815 4.07896 56.5609 6.79966 58.0397V67.2447H2.67729C2.12257 67.2447 1.67285 67.6944 1.67285 68.2491C1.67285 68.8038 2.12257 69.2536 2.67729 69.2536H7.8041H12.656H23.7692H39.1919H50.3089H66.9616C67.5163 69.2536 67.966 68.8038 67.966 68.2491C67.966 67.6944 67.5163 67.2447 66.9616 67.2447ZM4.20123 49.7054C4.20123 45.7302 6.90573 42.4961 10.23 42.4961C10.9358 42.4961 11.6131 42.6432 12.2431 42.9109C12.2628 42.9198 12.2828 42.9278 12.3032 42.9354C14.6093 43.9484 16.2588 46.6008 16.2588 49.7052C16.2588 53.6804 13.5543 56.9144 10.23 56.9144C6.90573 56.9144 4.20123 53.6805 4.20123 49.7054ZM8.80854 67.2447V58.7761C9.27032 58.8711 9.74482 58.9235 10.23 58.9235C10.7152 58.9235 11.1897 58.8711 11.6515 58.7761V67.2447H8.80854ZM39.7308 51.8412H23.2302V48.8493H39.7308V51.8412ZM24.7737 67.2447V53.8501H30.478V67.2447H24.7737ZM32.4869 67.2447V53.8501H38.1873V67.2447H32.4869ZM40.1962 67.2447V53.8501H40.2042C41.0509 53.8501 41.7397 53.1596 41.7397 52.3108V48.3796C41.7397 47.5309 41.0509 46.8403 40.2042 46.8403H22.7607C21.912 46.8403 21.2213 47.5308 21.2213 48.3796V52.3108C21.2213 53.1594 21.9118 53.8501 22.7607 53.8501H22.7648V67.2447H13.6604V58.0397C16.3811 56.5609 18.2677 53.3816 18.2677 49.7054C18.2677 46.0292 16.3811 42.85 13.6604 41.3712V12.591H29.8626C30.4173 12.591 30.867 12.1412 30.867 11.5865C30.867 11.0318 30.4173 10.5821 29.8626 10.5821H11.9756V7.27303H50.9892V10.5821H34.3095C33.7547 10.5821 33.305 11.0318 33.305 11.5865C33.305 12.1412 33.7547 12.591 34.3095 12.591H49.3044V67.2447H40.1962Z" fill="white"/>
                      <path d="M24.1471 16.9008H19.8569C19.084 16.9008 18.4551 17.5296 18.4551 18.3026V25.3052C18.4551 26.0781 19.0839 26.707 19.8569 26.707H24.1471C24.9199 26.707 25.5487 26.0782 25.5487 25.3052V18.3026C25.5487 17.5296 24.9199 16.9008 24.1471 16.9008ZM23.5398 24.6981H20.464V18.9097H23.5398V24.6981Z" fill="white"/>
                      <path d="M33.9156 16.9008H29.6253C28.8524 16.9008 28.2236 17.5296 28.2236 18.3026V25.3052C28.2236 26.0781 28.8524 26.707 29.6253 26.707H33.9156C34.6885 26.707 35.3173 26.0782 35.3173 25.3052V18.3026C35.3173 17.5296 34.6885 16.9008 33.9156 16.9008ZM33.3084 24.6981H30.2325V18.9097H33.3084V24.6981Z" fill="white"/>
                      <path d="M24.1471 30.7265H19.8569C19.084 30.7265 18.4551 31.3553 18.4551 32.1283V39.1309C18.4551 39.9038 19.0839 40.5327 19.8569 40.5327H24.1471C24.9199 40.5327 25.5487 39.9039 25.5487 39.1309V32.1283C25.5487 31.3553 24.9199 30.7265 24.1471 30.7265ZM23.5398 38.5236H20.464V32.7352H23.5398V38.5236Z" fill="white"/>
                      <path d="M33.9156 30.7265H29.6253C28.8524 30.7265 28.2236 31.3553 28.2236 32.1283V39.1309C28.2236 39.9038 28.8524 40.5327 29.6253 40.5327H33.9156C34.6885 40.5327 35.3173 39.9039 35.3173 39.1309V32.1283C35.3173 31.3553 34.6885 30.7265 33.9156 30.7265ZM33.3084 38.5236H30.2325V32.7352H33.3084V38.5236Z" fill="white"/>
                      <path d="M43.6842 16.9008H39.3939C38.621 16.9008 37.9922 17.5296 37.9922 18.3026V25.3052C37.9922 26.0781 38.621 26.707 39.3939 26.707H43.6842C44.457 26.707 45.0858 26.0782 45.0858 25.3052V18.3026C45.0858 17.5296 44.457 16.9008 43.6842 16.9008ZM43.0769 24.6981H40.0011V18.9097H43.0769V24.6981Z" fill="white"/>
                      <path d="M43.6842 30.7265H39.3939C38.621 30.7265 37.9922 31.3553 37.9922 32.1283V39.1309C37.9922 39.9038 38.621 40.5327 39.3939 40.5327H43.6842C44.457 40.5327 45.0858 39.9039 45.0858 39.1309V32.1283C45.0858 31.3553 44.457 30.7265 43.6842 30.7265ZM43.0769 38.5236H40.0011V32.7352H43.0769V38.5236Z" fill="white"/>
            ',
            'sizeRect' => [
                'w' => '68.5699',
                'h' => '68.5699'
            ],
            'translate' => [
                'x' => '0.53418',
                'y' => '0.683622'
            ],
        ],
    ],
    'geodesy' => [
        'title' => 'Геодезия',
        'href' => '/geodesy',
        'icon' => [
            'clip' => '#clip0_208_597',
            'sizeViewBox' => [
                'w' => '69',
                'h' => '70'
            ],
            'path' => '
                            <path d="M33.2441 25.2807C38.0835 25.2807 42.0205 21.3437 42.0205 16.5043C42.0205 13.3665 40.3641 10.6097 37.881 9.05774V3.69121C37.881 2.0328 36.5318 0.683638 34.8734 0.683638H31.6148C29.9564 0.683638 28.6073 2.0328 28.6073 3.69121V9.05774C26.1242 10.6095 24.4678 13.3665 24.4678 16.5043C24.4678 21.3437 28.4049 25.2807 33.2441 25.2807ZM30.6162 3.69121C30.6162 3.14064 31.0641 2.69252 31.6148 2.69252H34.8734C35.4241 2.69252 35.8721 3.14064 35.8721 3.69121V8.13044C35.042 7.86942 34.1593 7.72813 33.2441 7.72813C32.3289 7.72813 31.4462 7.86942 30.6162 8.13044V3.69121ZM33.2441 9.73688C36.9756 9.73688 40.0116 12.7727 40.0116 16.5043C40.0116 20.2358 36.9756 23.2718 33.2441 23.2718C29.5125 23.2718 26.4767 20.2358 26.4767 16.5043C26.4767 12.7727 29.5125 9.73688 33.2441 9.73688Z" fill="white"/>
                            <path d="M33.2441 20.1227C35.2392 20.1227 36.8624 18.4995 36.8624 16.5044C36.8624 14.5093 35.2392 12.8863 33.2441 12.8863C31.249 12.8863 29.626 14.5093 29.626 16.5044C29.626 18.4995 31.249 20.1227 33.2441 20.1227ZM33.2441 14.895C34.1316 14.895 34.8536 15.617 34.8536 16.5044C34.8536 17.3919 34.1316 18.1139 33.2441 18.1139C32.3567 18.1139 31.6347 17.3919 31.6347 16.5044C31.6349 15.6169 32.3567 14.895 33.2441 14.895Z" fill="white"/>
                            <path d="M62.815 52.1869L60.9577 48.46C60.1786 46.8964 58.2724 46.2583 56.7085 47.0374C55.1411 47.8189 54.5048 49.7192 55.286 51.2865L55.8179 52.354L55.0508 52.7363C54.1267 49.9861 52.8558 46.4547 51.1726 42.3977H53.73C55.3073 42.3977 56.5904 41.1146 56.5904 39.5375C56.5904 37.9602 55.3073 36.6771 53.73 36.6771H48.6682C48.0252 35.2832 47.3395 33.8493 46.6088 32.3832L42.6904 24.5205C42.4429 24.0241 41.8399 23.8224 41.3433 24.0696C40.8468 24.3171 40.6448 24.9202 40.8923 25.4168L44.8107 33.2793C50.5907 44.8776 53.5297 54.4366 54.6361 58.0352C54.8451 58.7148 54.997 59.2093 55.1065 59.5233C55.6516 61.2768 55.1261 62.6438 54.5706 63.497L36.791 27.8199C36.5435 27.3236 35.9403 27.1218 35.4438 27.369C34.9474 27.6165 34.7454 28.2196 34.9929 28.7161L38.9603 36.6771H27.9024L31.8323 28.7913C32.0798 28.2947 31.8778 27.6916 31.3813 27.4441C30.8843 27.1966 30.2817 27.3986 30.0342 27.8951L13.9706 60.1289C13.8953 60.2801 13.72 60.3281 13.5818 60.2593C12.2659 59.6036 11.3445 59.1443 9.85574 58.4025C9.71284 58.3311 9.65324 58.1588 9.72556 58.0137L25.8371 25.6841C26.0846 25.1875 25.8826 24.5844 25.3862 24.3369C24.8892 24.0894 24.2865 24.2912 24.039 24.7878L18.114 36.677H12.7576C11.1805 36.677 9.89739 37.9601 9.89739 39.5373C9.89739 41.1145 11.1805 42.3976 12.7576 42.3976H15.2631L7.92748 57.1176C7.53119 57.9127 7.62213 58.8633 8.18783 59.5742L7.28825 61.3793C6.69884 62.5621 6.95357 63.9339 7.82409 64.8315L6.34059 67.7997C6.09256 68.296 6.29372 68.8992 6.78991 69.1472C7.28825 69.3962 7.89024 69.1921 8.13747 68.6979L9.6211 65.7295C9.74431 65.7447 9.86766 65.7529 9.9906 65.7529C11.1023 65.7529 12.1741 65.1383 12.7027 64.0776L13.5904 62.2965C14.4789 62.3433 15.3466 61.8719 15.7684 61.0249L25.0513 42.3977H41.8112L53.4382 65.7286C53.4385 65.7293 53.4389 65.7299 53.4393 65.7304L54.9166 68.6966C55.1639 69.193 55.7667 69.3953 56.2635 69.1478C56.7601 68.9004 56.9622 68.2975 56.7147 67.8009L55.5617 65.4862C56.4846 64.4663 58.038 62.1538 57.0185 58.9065C57.0152 58.8959 57.0116 58.8854 57.008 58.875C56.911 58.5987 56.7623 58.1147 56.5563 57.4445C56.3386 56.7366 56.0504 55.7997 55.6851 54.6648L56.7139 54.1521L57.1431 55.0135C57.9184 56.5692 59.8212 57.2189 61.3923 56.4361C62.9562 55.6568 63.5942 53.7506 62.815 52.1869ZM12.7576 40.3888C12.2881 40.3888 11.9063 40.0069 11.9063 39.5375C11.9063 39.0679 12.2882 38.686 12.7576 38.686H17.1129L16.2642 40.389H12.7576V40.3888ZM9.54249 63.6377C9.0412 63.388 8.83536 62.7791 9.08647 62.2752L9.88949 60.6637L11.7081 61.57L10.9049 63.1816C10.655 63.6831 10.044 63.8874 9.54249 63.6377ZM53.73 38.686C54.1996 38.686 54.5815 39.0681 54.5815 39.5375C54.5815 40.007 54.1995 40.3888 53.73 40.3888H50.3232C50.0823 39.8294 49.834 39.2617 49.5779 38.6858L53.73 38.686ZM26.0526 40.3888L26.9013 38.6858H39.9614L40.8101 40.3888H26.0526ZM60.4965 54.638C59.9237 54.9231 59.2262 54.6894 58.9412 54.1174C58.3423 52.9157 57.8059 51.8394 57.0839 50.3904C56.7976 49.8155 57.0321 49.1205 57.6048 48.8354C58.1781 48.5492 58.8755 48.7854 59.1598 49.3561L61.0171 53.083C61.3022 53.6551 61.0686 54.3529 60.4965 54.638Z" fill="white"/>
            ',
            'sizeRect' => [
                'w' => '68.5699',
                'h' => '68.5699'
            ],
            'translate' => [
                'x' => '0.40625',
                'y' => '0.683622'
            ],
        ],
    ],
    'geology' => [
        'title' => 'Геология',
        'href' => '/geology',
        'icon' => [
            'clip' => 'lip0_208_588',
            'sizeViewBox' => [
                'w' => '69',
                'h' => '70'
            ],
            'path' => '
                      <path d="M68.8483 15.5691C68.8483 15.261 68.707 14.9701 68.465 14.7796C68.223 14.589 67.907 14.5207 67.6076 14.5926C66.082 14.9618 58.0296 16.9107 56.6532 17.2439C56.3454 17.3184 56.0906 17.5339 55.9661 17.8252L52.0232 27.0449L51.1473 27.1567C51.3369 26.1959 51.434 25.2094 51.434 24.2079C51.434 20.1851 49.8675 16.403 47.0229 13.5584C46.668 13.2034 46.2902 12.8616 45.9005 12.5426C45.4711 12.1915 44.8382 12.2544 44.4869 12.684C44.1356 13.1133 44.199 13.7462 44.6282 14.0975C44.9665 14.3742 45.2942 14.6708 45.6021 14.979C48.0673 17.444 49.425 20.7217 49.425 24.2079C49.425 27.6943 48.0673 30.9718 45.6021 33.437C40.5133 38.5259 32.233 38.5259 27.1442 33.437C24.7326 31.0254 23.3213 27.7691 23.3213 24.2079C23.3213 20.7217 24.679 17.444 27.1442 14.979C30.9512 11.172 36.6055 10.09 41.5484 12.2224C42.0579 12.4426 42.6488 12.2074 42.8686 11.6979C43.0883 11.1885 42.8535 10.5975 42.3441 10.3778C39.6059 9.19647 36.6022 8.8559 33.6574 9.39307C30.6421 9.94297 27.8986 11.3833 25.7237 13.5584C22.8791 16.403 21.3124 20.1851 21.3124 24.2081C21.3124 26.5427 21.8401 28.7961 22.8388 30.8323L12.2166 41.4545C11.8243 41.8469 11.8243 42.4828 12.2166 42.875C12.4128 43.0711 12.6699 43.1691 12.9269 43.1691C13.1839 43.1691 13.4411 43.0711 13.6373 42.875L23.8822 32.6301C24.418 33.4212 25.0331 34.167 25.7237 34.8576C26.4193 35.553 27.1664 36.1662 27.953 36.697L13.7965 50.8536C13.253 51.3972 12.5305 51.6964 11.762 51.6964C10.9936 51.6964 10.271 51.3972 9.72771 50.8538C8.60582 49.7319 8.60582 47.9065 9.72771 46.7847L10.8911 45.6213C11.2834 45.2289 11.2834 44.593 10.8911 44.2008C10.4987 43.8086 9.86284 43.8086 9.47058 44.2008L8.30716 45.3642C6.4022 47.2693 6.4022 50.369 8.30716 52.2742C9.23004 53.1972 10.4571 53.7055 11.7622 53.7055C13.0673 53.7055 14.2943 53.1972 15.2173 52.2743L29.7539 37.7378C31.8352 38.754 34.1041 39.2621 36.3734 39.2618C37.067 39.2618 37.7606 39.2143 38.4489 39.1192L37.0037 41.7099L32.5934 42.5097C32.2335 42.5749 31.9377 42.8306 31.8208 43.1769L30.2836 47.7332C27.5827 48.2216 24.0923 48.8527 22.7797 49.0901C22.4012 49.1585 22.0951 49.4371 21.9913 49.8074L19.4766 58.7828H1.28276C0.727909 58.7828 0.27832 59.2324 0.27832 59.7873C0.27832 60.3421 0.727909 60.7917 1.28276 60.7917H54.6383C55.1932 60.7917 55.6428 60.3421 55.6428 59.7873C55.6428 59.2324 55.1932 58.7828 54.6383 58.7828H44.5176L47.7846 54.5844C49.4843 53.9883 58.7482 50.7397 61.1365 49.9021H66.8394V58.7828H58.5222C57.9673 58.7828 57.5177 59.2324 57.5177 59.7873C57.5177 60.3421 57.9673 60.7917 58.5222 60.7917H67.8438C68.3987 60.7917 68.8483 60.3421 68.8483 59.7873C68.8483 51.9741 68.8483 23.3792 68.8483 15.5691ZM66.8394 23.1064L64.7789 25.1597L61.7593 23.9908L59.8389 18.5397L66.8394 16.8455V23.1064ZM50.5714 29.2555L52.8478 28.965C53.2012 28.9198 53.5041 28.6911 53.6441 28.3636L57.6151 19.0782L57.8764 19.015L60.0181 25.0947C60.1158 25.3713 60.3292 25.5917 60.603 25.6976L64.6627 27.2691C64.7804 27.3147 64.9032 27.3368 65.0251 27.3368C65.2861 27.3368 65.5424 27.2349 65.7342 27.0438L66.8392 25.9425V33.6849L60.3997 37.4904L49.0775 37.7411L46.6826 35.1874C46.7973 35.0796 46.9107 34.9698 47.0227 34.8578C48.6322 33.2483 49.8324 31.3388 50.5714 29.2555ZM23.756 50.955L29.2126 49.9683L31.89 52.149L29.9115 58.7828H21.5627L23.756 50.955ZM46.3806 53.1175L41.9722 58.7828H32.008L34.0068 52.0805C34.1228 51.6916 33.9932 51.271 33.6786 51.0146L31.685 49.3909C31.8269 49.2737 31.9366 49.1178 31.9975 48.9372L33.5349 44.3805L37.8288 43.602C38.1244 43.5484 38.3804 43.3652 38.5268 43.1028L41.0891 38.5096C42.5084 38.0441 43.8719 37.3626 45.1272 36.4651L47.9189 39.4421C48.1089 39.6449 48.3742 39.7595 48.6516 39.7595C48.659 39.7595 48.6663 39.7594 48.6738 39.7592L51.5547 39.6955L46.9759 44.7536C46.7757 44.9748 46.6841 45.2738 46.7263 45.5692L47.7098 52.4818L46.8411 52.7865C46.6589 52.8503 46.4991 52.9651 46.3806 53.1175ZM60.9657 47.8932C60.8525 47.8932 60.74 47.9124 60.6334 47.9499L49.6425 51.8041L48.7816 45.7527L54.3201 39.6343L60.707 39.4929C60.8793 39.4891 61.0476 39.441 61.1957 39.3534L66.8394 36.0184V47.8932H60.9657Z" fill="white"/>
                        <path d="M28.7204 16.5553C24.5008 20.7751 24.5008 27.641 28.7204 31.8607C30.8305 33.9707 33.6013 35.0254 36.3731 35.0254C39.1441 35.0254 41.9162 33.9702 44.0259 31.8607C48.2455 27.641 48.2455 20.7751 44.0259 16.5553C39.8058 12.3358 32.9401 12.3358 28.7204 16.5553ZM42.6052 17.9758C46.0416 21.4124 46.0416 27.0039 42.6052 30.4402C39.1687 33.8767 33.5773 33.8767 30.141 30.4402C26.7046 27.0039 26.7046 21.4124 30.141 17.976C31.8594 16.2576 34.116 15.3987 36.3731 15.3987C38.6298 15.3986 40.8872 16.2578 42.6052 17.9758Z" fill="white"/>
                        <path d="M12.4566 49.1288C12.7136 49.1288 12.9707 49.0308 13.1669 48.8347L13.7619 48.2397C14.1542 47.8473 14.1542 47.2114 13.7619 46.8191C13.3695 46.427 12.7336 46.427 12.3414 46.8191L11.7463 47.4142C11.3541 47.8066 11.3541 48.4424 11.7463 48.8347C11.9424 49.0306 12.1996 49.1288 12.4566 49.1288Z" fill="white"/>
            ',
            'sizeRect' => [
                'w' => '68.5699',
                'h' => '68.5699'
            ],
            'translate' => [
                'x' => '0.27832',
                'y' => '0.683622'
            ],
        ],
    ],
    'ecology' => [
        'title' => 'Экология',
        'href' => '/ecology',
        'icon' => [
            'clip' => 'clip0_208_606',
            'sizeViewBox' => [
                'w' => '69',
                'h' => '70'
            ],
            'path' => '
                      <path d="M65.5939 10.2849C64.6652 7.36416 63.4065 5.27288 63.3531 5.18499C63.1467 4.84481 62.7218 4.66786 62.3369 4.75614C62.2372 4.77889 59.8603 5.33369 57.1185 6.70303C53.417 8.55105 50.8313 11.0182 49.6401 13.8365C48.6486 16.1836 48.5062 19.053 49.2097 22.2228C47.7113 20.5494 46.0257 19.0855 44.1883 17.8531C43.6272 16.7447 42.1437 14.0158 39.8244 11.1638C39.0605 10.2249 37.5911 11.4031 38.3629 12.3515C39.9256 14.2736 41.1019 16.164 41.8376 17.4627L33.2594 15.7905L25.1093 4.67374C25.9007 4.68473 26.6949 4.76124 27.4851 4.91622C29.9903 5.40667 32.4649 6.68263 34.8414 8.70799C35.7725 9.50174 36.9818 8.05707 36.0629 7.27431C33.4376 5.03707 30.6734 3.62143 27.8468 3.06781C23.532 2.22345 18.4996 3.33187 13.2922 6.27457C9.41099 8.46787 6.81552 10.877 6.70723 10.9782C6.35999 11.3027 6.30467 11.892 6.59541 12.271C6.976 13.0518 8.41832 15.8686 10.8192 18.9011C12.2344 20.6891 13.727 22.2193 15.2709 23.4768C14.8322 23.8445 14.4053 24.229 13.9922 24.6335C11.7856 26.7919 10.0961 29.3379 8.98685 32.1213C8.00634 34.5806 7.47901 37.2263 7.44958 39.9532C7.40093 44.4124 8.69297 48.7131 11.1868 52.391C13.623 55.9835 17.0287 58.7418 21.0355 60.3673C22.1568 60.8213 22.8658 59.0773 21.7437 58.6221C20.2919 58.0332 18.9281 57.2787 17.6702 56.3814C17.831 55.4891 18.2042 52.2781 16.0713 48.954C15.7727 48.489 16.6653 46.663 17.1982 45.5722C17.7483 44.4481 18.316 43.2859 18.5812 42.1916C18.863 41.0291 18.5459 40.0533 17.6651 39.3686C17.0185 38.866 16.1721 38.6059 15.4263 38.3763C14.9417 38.2272 14.3924 38.0585 14.1962 37.8949C13.7921 37.5563 13.1321 36.3051 12.6017 35.3002C12.0131 34.1855 11.4528 33.1246 10.8808 32.4713C12.1681 29.414 14.2358 26.7087 16.8254 24.639C19.191 26.2504 21.8908 27.3624 24.7605 27.5876C21.4325 30.1662 20.3559 33.4593 21.8947 36.6225C23.6917 40.3162 27.3905 39.726 30.6538 39.2062C31.2184 39.1159 31.8026 39.0229 32.3621 38.9531C32.572 38.9268 32.6352 38.9841 32.6776 39.0214C33.3921 39.657 33.3709 42.6927 33.3556 44.9095C33.3348 47.9758 33.3152 50.8722 34.4573 52.3593C35.04 53.1173 35.8604 53.505 36.8221 53.505C37.3985 53.505 38.0247 53.3661 38.6815 53.0844C41.5218 51.868 44.4743 48.2073 44.0239 45.3109C43.6303 42.7786 43.3698 41.1056 43.9838 39.757C44.5516 38.5089 45.9241 37.3534 48.627 35.879C48.9507 37.3366 49.1139 38.853 49.0971 40.4088C49.0394 45.719 46.9167 50.689 43.1206 54.4027C38.878 58.5531 32.9153 60.6028 27.017 59.9526C25.8152 59.8224 25.6076 61.6923 26.811 61.825C33.2673 62.5359 39.795 60.2916 44.4374 55.7493C48.5937 51.6832 50.9172 46.2428 50.9804 40.4288C51.0644 32.7201 47.109 25.8906 41.0878 21.9564C42.332 21.0693 43.2588 20.3022 43.7727 19.8569C45.968 21.4318 47.9153 23.3721 49.5353 25.6325C53.4244 31.06 54.9668 37.6764 53.8792 44.2641C51.6329 57.8629 38.7427 67.1002 25.1415 64.8532C18.5534 63.7652 12.7837 60.1774 8.89464 54.7499C5.00517 49.3228 3.4628 42.7056 4.55082 36.1183C4.74621 34.933 2.88917 34.6218 2.69299 35.8115C1.52258 42.8955 3.18187 50.011 7.36326 55.8474C11.5454 61.6829 17.7506 65.5414 24.8347 66.7118C26.3162 66.9563 27.7994 67.0771 29.2723 67.0771C34.8399 67.0771 40.256 65.3484 44.8714 62.0412C50.7085 57.859 54.5674 51.655 55.737 44.5709C56.5943 39.38 55.9308 34.1722 53.8701 29.4631C54.8212 29.1825 56.4397 28.6379 58.2124 27.7528C61.9131 25.9048 64.4992 23.4376 65.69 20.6193C66.882 17.8002 66.8486 14.2265 65.5939 10.2849ZM10.9357 36.1791C11.6365 37.5076 12.2992 38.7632 12.9877 39.3392C13.4755 39.7468 14.1542 39.9556 14.8726 40.1765C16.7132 40.7423 16.927 41.0201 16.7505 41.7479C16.5339 42.6429 16.0113 43.7116 15.5063 44.7447C14.5336 46.7348 13.6151 48.6134 14.4858 49.971C15.7205 51.8951 15.932 53.7894 15.9108 54.9677C10.3016 49.9098 8.01772 41.9209 10.107 34.6599C10.384 35.1346 10.6752 35.6863 10.9357 36.1791ZM56.4986 17.6726L53.8223 11.1869C55.1245 9.96904 56.6355 9.05248 57.9224 8.40705C59.0187 7.85696 60.0616 7.44577 60.8981 7.15424L56.4986 17.6726ZM62.6343 7.88443C63.0082 8.68798 63.4418 9.72421 63.8122 10.8954C64.2183 12.1808 64.591 13.7738 64.6652 15.4354L58.3933 18.023L62.6343 7.88443ZM51.3747 14.5699C51.6525 13.913 52.0115 13.3041 52.4263 12.7418L55.4729 20.1241L52.739 26.6616C52.3548 25.8467 51.9025 24.7763 51.5187 23.5604C50.7485 21.1258 50.0988 17.5891 51.3747 14.5699ZM57.4081 26.0488C56.353 26.5784 55.3462 26.9794 54.5262 27.2686L57.3633 20.4859L64.5851 17.5059C64.4804 18.3149 64.2806 19.1169 63.9554 19.8859C62.6798 22.9052 59.6908 24.9042 57.4081 26.0488ZM23.4504 25.5128C23.1177 25.4477 22.7893 25.368 22.4656 25.2774L32.8883 17.6373L41.4704 19.31C38.344 21.7732 30.7358 26.9402 23.4504 25.5128ZM13.9251 19.6207C11.6961 17.2183 10.0623 14.6495 9.12417 13.0047L20.0455 15.1341L13.9251 19.6207ZM15.8539 7.05615L20.4234 13.2888L9.43139 11.1461C10.8152 10.0534 13.0996 8.41294 15.8539 7.05615ZM23.1479 13.8201L17.6082 6.26359C19.2667 5.58206 21.0468 5.0457 22.8717 4.80714L30.5353 15.2596L23.1479 13.8201ZM22.5617 15.6245L30.3725 17.1469L20.348 24.4946C18.4576 23.6216 16.7564 22.3665 15.2678 20.9712L22.5617 15.6245ZM48.1154 34.0145C44.7203 35.8232 43.0579 37.244 42.2692 38.977C41.4221 40.838 41.7325 42.8355 42.1621 45.6001C42.416 47.2303 40.4785 50.266 37.9399 51.3533C37.0006 51.7554 36.3316 51.708 35.9506 51.2116C35.2024 50.2378 35.2228 47.2904 35.2389 44.9225C35.2613 41.6463 35.2809 38.8169 33.9292 37.6144C33.4431 37.182 32.8212 36.9991 32.1302 37.0839C31.5382 37.1577 30.9375 37.2534 30.3572 37.346C26.8954 37.8976 24.717 38.1185 23.5885 35.7985C21.7601 32.0409 25.4613 29.2575 27.1374 28.2354C27.4788 28.0274 27.7954 27.7822 28.0897 27.5091C32.1408 27.0249 35.9687 25.2868 39.3799 23.1096C43.4698 25.5532 46.6095 29.4203 48.1154 34.0145Z" fill="white"/>
            ',
            'sizeRect' => [
                'w' => '68.5699',
                'h' => '68.5699'
            ],
            'translate' => [
                'x' => '0.53418',
                'y' => '0.683622'
            ],
        ],
    ],
    'vacancies' => [
        'title' => 'Вакансии',
        'href' => '/vacancies',
        'icon' => [
            'clip' => 'clip0_208_570',
            'sizeViewBox' => [
                'w' => '69',
                'h' => '70'
            ],
            'path' => '
            <path d="M36.2326 67.2444H6.04746C5.12592 67.2444 4.37607 66.4945 4.37607 65.573V13.5232C4.37607 12.9684 3.92635 12.5187 3.37163 12.5187C2.81691 12.5187 2.36719 12.9684 2.36719 13.5232V65.573C2.36719 67.6022 4.01822 69.2532 6.04746 69.2532H36.2326C36.7874 69.2532 37.237 68.8035 37.237 68.2488C37.237 67.6941 36.7874 67.2444 36.2326 67.2444Z" fill="white"/>
                      <path d="M11.0728 11.2634H23.9297C24.4844 11.2634 24.9341 10.8137 24.9341 10.259C24.9341 9.70428 24.4844 9.25455 23.9297 9.25455H11.0728C10.5181 9.25455 10.0684 9.70428 10.0684 10.259C10.0684 10.8137 10.5181 11.2634 11.0728 11.2634Z" fill="white"/>
                      <path d="M23.9297 60.1463C24.4844 60.1463 24.9341 59.6966 24.9341 59.1419C24.9341 58.5871 24.4844 58.1374 23.9297 58.1374H11.0728C10.5181 58.1374 10.0684 58.5871 10.0684 59.1419C10.0684 59.6966 10.5181 60.1463 11.0728 60.1463H23.9297Z" fill="white"/>
                      <path d="M65.3672 59.9964L55.045 49.6741C55.0436 49.6728 55.0422 49.6717 55.0409 49.6704L51.5238 46.1521C53.0374 44.1091 54.1644 41.7978 54.8275 39.3402C55.7248 36.0145 55.7674 32.4874 54.9501 29.1398C54.8186 28.6009 54.275 28.2711 53.7362 28.4022C53.1973 28.5337 52.8671 29.0773 52.9986 29.6161C53.7356 32.6356 53.6974 35.8172 52.8881 38.8168C52.054 41.9074 50.4094 44.7449 48.1317 47.0224C40.9521 54.2023 29.2694 54.2023 22.0893 47.0224C14.9095 39.8425 14.9095 28.1599 22.0893 20.98C25.5674 17.5018 30.1918 15.5864 35.1105 15.5864C40.0292 15.5864 44.6537 17.5018 48.1319 20.98C49.5694 22.4177 50.7494 24.0627 51.6386 25.8694C51.8837 26.367 52.4858 26.5723 52.9833 26.327C53.4811 26.082 53.686 25.4799 53.4411 24.9822C52.8969 23.8768 52.2517 22.8286 51.518 21.8412V4.36359C51.5179 2.33435 49.8669 0.683313 47.8376 0.683313H6.04746C4.01822 0.683313 2.36719 2.33435 2.36719 4.36359V9.23755C2.36719 9.79227 2.81691 10.242 3.37163 10.242C3.92635 10.242 4.37607 9.79227 4.37607 9.23755V4.36359C4.37607 3.44205 5.12592 2.6922 6.04746 2.6922H47.8376C48.7593 2.6922 49.509 3.44205 49.509 4.36359V19.5174C45.6564 15.687 40.5458 13.5777 35.1105 13.5777C29.6552 13.5777 24.5264 15.7021 20.6689 19.5597C20.6309 19.5978 20.5942 19.6367 20.5566 19.675H14.1322C13.5774 19.675 13.1277 20.1248 13.1277 20.6795C13.1277 21.2342 13.5774 21.6839 14.1322 21.6839H18.8194C18.2084 22.4908 17.6654 23.333 17.1902 24.2028H11.0724C10.5176 24.2028 10.0679 24.6525 10.0679 25.2072C10.0679 25.762 10.5176 26.2117 11.0724 26.2117H16.2318C15.8931 27.0355 15.6103 27.8769 15.3838 28.7306H11.0724C10.5176 28.7306 10.0679 29.1803 10.0679 29.735C10.0679 30.2897 10.5176 30.7394 11.0724 30.7394H14.9578C13.9538 36.995 15.8566 43.6309 20.6689 48.4432C24.6505 52.4248 29.8806 54.4156 35.1105 54.4156C39.3896 54.4156 43.6684 53.0821 47.2637 50.4167L49.509 52.6613V65.5732C49.509 66.4948 48.7592 67.2446 47.8376 67.2446H40.4685C39.9136 67.2446 39.4641 67.6944 39.4641 68.2491C39.4641 68.8038 39.9136 69.2535 40.4685 69.2535H47.8376C49.8669 69.2535 51.5179 67.6025 51.5179 65.5732V54.6705L61.1056 64.2581C61.6748 64.8273 62.4315 65.1407 63.2364 65.1407C64.0413 65.1407 64.798 64.8271 65.367 64.2581H65.3672C65.9362 63.6889 66.2497 62.9322 66.2497 62.1273C66.2497 61.3223 65.9362 60.5655 65.3672 59.9964ZM49.5523 48.4431C49.7896 48.2058 50.0187 47.9611 50.2435 47.713L52.9139 50.3843L51.4938 51.8045L48.8241 49.1359C49.0711 48.9119 49.314 48.6813 49.5523 48.4431ZM63.9467 62.8374C63.757 63.0272 63.5046 63.1316 63.2364 63.1316C62.9681 63.1316 62.7158 63.0272 62.5262 62.8374L52.9141 53.2254L54.3346 51.805L63.9466 61.4171C64.1362 61.6069 64.2407 61.8589 64.2407 62.1273C64.2408 62.3954 64.1364 62.6476 63.9467 62.8374Z" fill="white"/>
                      <path d="M23.5099 22.4007C20.4159 25.4948 18.7119 29.6146 18.7119 34.0015C18.7119 38.3883 20.416 42.5082 23.5099 45.6022C26.7082 48.8005 30.9093 50.3997 35.1106 50.3997C39.3117 50.3997 43.5129 48.8007 46.7113 45.6022C49.8054 42.5082 51.5092 38.3883 51.5092 34.0015C51.5092 29.6147 49.8053 25.4948 46.7113 22.4007C40.3145 16.0039 29.9066 16.004 23.5099 22.4007ZM45.2908 44.1816C42.4839 46.9885 38.798 48.3919 35.1106 48.3916C31.4243 48.3912 27.7368 46.988 24.9304 44.1816C22.2157 41.4669 20.7207 37.8516 20.7207 34.0013C20.7207 30.1511 22.2157 26.5357 24.9304 23.8211C27.737 21.0144 31.4237 19.611 35.1106 19.611C38.7974 19.611 42.4841 21.0144 45.2908 23.8211C48.0055 26.5358 49.5005 30.1511 49.5005 34.0013C49.5005 37.8516 48.0053 41.467 45.2908 44.1816Z" fill="white"/>
            ',
            'sizeRect' => [
                'w' => '68.5699',
                'h' => '68.5699'
            ],
            'translate' => [
                'x' => '0.0234375',
                'y' => '0.683313'
            ],
        ],
    ],
    'contacts' => [
        'title' => 'Контакты',
        'href' => '/contacts',
        'icon' => [
            'clip' => 'clip0_208_558',
            'sizeViewBox' => [
                'w' => '69',
                'h' => '69'
            ],
            'path' => '
            <path d="M65.2898 2.22088H17.7915C16.1958 2.22274 14.9027 3.51586 14.9008 5.11159V18.2128L12.7288 14.9548C11.7346 13.4551 9.73514 13.0051 8.1944 13.9345L3.72576 16.6212C2.26233 17.4799 1.18881 18.8724 0.730761 20.5061C-0.899382 26.4417 0.310175 36.668 15.3204 51.6805C27.2572 63.6049 36.1571 66.8165 42.2911 66.8165C43.7112 66.823 45.1259 66.6384 46.4969 66.2678C48.1299 65.8098 49.5224 64.7377 50.3829 63.2763L53.0661 58.803C53.9917 57.2634 53.5422 55.2681 52.0458 54.2741L41.3457 47.1414C39.8778 46.1706 37.9104 46.4898 36.8248 47.8749L33.7096 51.8799C33.384 52.3084 32.7933 52.4333 32.322 52.1735L31.7291 51.8469C29.7782 50.7836 27.35 49.4596 22.446 44.5556C21.9155 44.025 21.4348 43.5286 20.9837 43.0535H65.2898C66.8816 43.0547 68.1743 41.7681 68.1805 40.1763V5.11159C68.1787 3.51586 66.8855 2.22274 65.2898 2.22088ZM30.6443 53.8377L31.2202 54.1541C32.6678 54.9635 34.49 54.5879 35.4995 53.2721L38.6148 49.2671C38.9689 48.8159 39.6098 48.7119 40.0884 49.0278L50.7886 56.1605C51.2746 56.4846 51.4208 57.1331 51.1207 57.6342L48.4375 62.1075C47.8771 63.0684 46.9667 63.7751 45.8971 64.08C40.5385 65.5536 31.1601 64.3068 16.9265 50.072C2.69275 35.8372 1.45052 26.4598 2.92071 21.1058C3.22533 20.0362 3.93167 19.126 4.892 18.5654L9.3653 15.881C9.86653 15.5815 10.5147 15.7275 10.839 16.2131L17.975 26.9132C18.2914 27.3917 18.1874 28.0331 17.7357 28.3869L13.7295 31.5032C12.414 32.5124 12.0383 34.3342 12.8476 35.7814L13.1649 36.3573C14.2985 38.4363 15.7076 41.0232 20.8441 46.1585C25.9806 51.2939 28.5665 52.704 30.6443 53.8377ZM65.9134 40.1765C65.9097 40.5175 65.6308 40.7912 65.2899 40.7886H18.9387C17.4663 39.105 16.1967 37.2544 15.1558 35.2748L14.8292 34.6796C14.5688 34.2093 14.6935 33.6192 15.1217 33.2943L19.128 30.178C20.5135 29.0927 20.8328 27.125 19.8614 25.6572L17.168 21.6147V5.11159C17.1661 4.94567 17.2312 4.78599 17.3485 4.66869C17.4658 4.55139 17.6255 4.48629 17.7914 4.48815H65.2898C65.4557 4.48629 65.6154 4.55139 65.7327 4.66869C65.85 4.78599 65.9151 4.94567 65.9133 5.11159V40.1765H65.9134Z" fill="white"/>
                      <path d="M61.3852 7.4696L42.439 21.8381C41.903 22.2276 41.1771 22.2276 40.6411 21.8381L21.702 7.4696C21.2031 7.09112 20.4917 7.18889 20.1133 7.68786C19.7349 8.18683 19.8326 8.89821 20.3316 9.27656L39.2731 23.6439C40.6206 24.6394 42.4599 24.6394 43.8075 23.6439L62.7547 9.27656C62.9944 9.09483 63.1521 8.82515 63.1929 8.52704C63.2337 8.22894 63.1544 7.92685 62.9723 7.68733C62.5939 7.18929 61.8837 7.09192 61.3852 7.4696Z" fill="white"/>
                      <path d="M31.8664 23.7391L20.2537 36.1749C19.8268 36.6328 19.8519 37.3503 20.3098 37.7773C20.7677 38.2043 21.4852 38.1792 21.9122 37.7212L33.525 25.2799C33.9086 24.8171 33.8641 24.1352 33.4237 23.7259C32.9832 23.3166 32.2999 23.3224 31.8664 23.7391Z" fill="white"/>
                      <path d="M51.2901 23.7391C50.8632 23.2812 50.1458 23.256 49.6878 23.6831C49.2298 24.11 49.2046 24.8274 49.6317 25.2855L61.241 37.7212C61.668 38.1792 62.3854 38.2044 62.8434 37.7773C63.3013 37.3503 63.3266 36.633 62.8995 36.1749L51.2901 23.7391Z" fill="white"/>
            ',
            'sizeRect' => [
                'w' => '68',
                'h' => '68'
            ],
            'translate' => [
                'x' => '0.180664',
                'y' => '0.518738'
            ],
        ],
    ],
];
@endphp

<nav class="menu">

    @foreach ($menu_items as $key => $menu_item)
        <a href="{{ $menu_item['href'] }}" class=" {{ \Route::currentRouteName() == $key ? 'active' : '' }} ">
            <x-menu-item :title="$menu_item['title']" :icon="$menu_item['icon']" :key="$key"/>
        </a>
    @endforeach

</nav>
