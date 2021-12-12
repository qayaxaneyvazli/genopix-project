<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection limit
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection period
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection url
     * @property Grid\Column|Collection color
     * @property Grid\Column|Collection sort_order
     * @property Grid\Column|Collection showed_name
     * @property Grid\Column|Collection start_range
     * @property Grid\Column|Collection end_range
     * @property Grid\Column|Collection trait_id
     * @property Grid\Column|Collection score
     * @property Grid\Column|Collection snps
     * @property Grid\Column|Collection rsID
     * @property Grid\Column|Collection effect_allele
     * @property Grid\Column|Collection reference_allele
     * @property Grid\Column|Collection genotype
     * @property Grid\Column|Collection reliability
     * @property Grid\Column|Collection population
     * @property Grid\Column|Collection gene_in_ld
     * @property Grid\Column|Collection references
     * @property Grid\Column|Collection trait_category_id
     * @property Grid\Column|Collection pricing_type
     * @property Grid\Column|Collection referance_title
     * @property Grid\Column|Collection refereance_description
     * @property Grid\Column|Collection reference_url
     * @property Grid\Column|Collection referance_values
     * @property Grid\Column|Collection gender
     * @property Grid\Column|Collection age
     * @property Grid\Column|Collection ethnicities
     * @property Grid\Column|Collection interests
     * @property Grid\Column|Collection fullname
     * @property Grid\Column|Collection barcode
     * @property Grid\Column|Collection two_factor_secret
     * @property Grid\Column|Collection two_factor_recovery_codes
     * @property Grid\Column|Collection package_id
     * @property Grid\Column|Collection email_verified_at
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection limit(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection period(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection url(string $label = null)
     * @method Grid\Column|Collection color(string $label = null)
     * @method Grid\Column|Collection sort_order(string $label = null)
     * @method Grid\Column|Collection showed_name(string $label = null)
     * @method Grid\Column|Collection start_range(string $label = null)
     * @method Grid\Column|Collection end_range(string $label = null)
     * @method Grid\Column|Collection trait_id(string $label = null)
     * @method Grid\Column|Collection score(string $label = null)
     * @method Grid\Column|Collection snps(string $label = null)
     * @method Grid\Column|Collection rsID(string $label = null)
     * @method Grid\Column|Collection effect_allele(string $label = null)
     * @method Grid\Column|Collection reference_allele(string $label = null)
     * @method Grid\Column|Collection genotype(string $label = null)
     * @method Grid\Column|Collection reliability(string $label = null)
     * @method Grid\Column|Collection population(string $label = null)
     * @method Grid\Column|Collection gene_in_ld(string $label = null)
     * @method Grid\Column|Collection references(string $label = null)
     * @method Grid\Column|Collection trait_category_id(string $label = null)
     * @method Grid\Column|Collection pricing_type(string $label = null)
     * @method Grid\Column|Collection referance_title(string $label = null)
     * @method Grid\Column|Collection refereance_description(string $label = null)
     * @method Grid\Column|Collection reference_url(string $label = null)
     * @method Grid\Column|Collection referance_values(string $label = null)
     * @method Grid\Column|Collection gender(string $label = null)
     * @method Grid\Column|Collection age(string $label = null)
     * @method Grid\Column|Collection ethnicities(string $label = null)
     * @method Grid\Column|Collection interests(string $label = null)
     * @method Grid\Column|Collection fullname(string $label = null)
     * @method Grid\Column|Collection barcode(string $label = null)
     * @method Grid\Column|Collection two_factor_secret(string $label = null)
     * @method Grid\Column|Collection two_factor_recovery_codes(string $label = null)
     * @method Grid\Column|Collection package_id(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection limit
     * @property Show\Field|Collection price
     * @property Show\Field|Collection status
     * @property Show\Field|Collection period
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection url
     * @property Show\Field|Collection color
     * @property Show\Field|Collection sort_order
     * @property Show\Field|Collection showed_name
     * @property Show\Field|Collection start_range
     * @property Show\Field|Collection end_range
     * @property Show\Field|Collection trait_id
     * @property Show\Field|Collection score
     * @property Show\Field|Collection snps
     * @property Show\Field|Collection rsID
     * @property Show\Field|Collection effect_allele
     * @property Show\Field|Collection reference_allele
     * @property Show\Field|Collection genotype
     * @property Show\Field|Collection reliability
     * @property Show\Field|Collection population
     * @property Show\Field|Collection gene_in_ld
     * @property Show\Field|Collection references
     * @property Show\Field|Collection trait_category_id
     * @property Show\Field|Collection pricing_type
     * @property Show\Field|Collection referance_title
     * @property Show\Field|Collection refereance_description
     * @property Show\Field|Collection reference_url
     * @property Show\Field|Collection referance_values
     * @property Show\Field|Collection gender
     * @property Show\Field|Collection age
     * @property Show\Field|Collection ethnicities
     * @property Show\Field|Collection interests
     * @property Show\Field|Collection fullname
     * @property Show\Field|Collection barcode
     * @property Show\Field|Collection two_factor_secret
     * @property Show\Field|Collection two_factor_recovery_codes
     * @property Show\Field|Collection package_id
     * @property Show\Field|Collection email_verified_at
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection limit(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection period(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection url(string $label = null)
     * @method Show\Field|Collection color(string $label = null)
     * @method Show\Field|Collection sort_order(string $label = null)
     * @method Show\Field|Collection showed_name(string $label = null)
     * @method Show\Field|Collection start_range(string $label = null)
     * @method Show\Field|Collection end_range(string $label = null)
     * @method Show\Field|Collection trait_id(string $label = null)
     * @method Show\Field|Collection score(string $label = null)
     * @method Show\Field|Collection snps(string $label = null)
     * @method Show\Field|Collection rsID(string $label = null)
     * @method Show\Field|Collection effect_allele(string $label = null)
     * @method Show\Field|Collection reference_allele(string $label = null)
     * @method Show\Field|Collection genotype(string $label = null)
     * @method Show\Field|Collection reliability(string $label = null)
     * @method Show\Field|Collection population(string $label = null)
     * @method Show\Field|Collection gene_in_ld(string $label = null)
     * @method Show\Field|Collection references(string $label = null)
     * @method Show\Field|Collection trait_category_id(string $label = null)
     * @method Show\Field|Collection pricing_type(string $label = null)
     * @method Show\Field|Collection referance_title(string $label = null)
     * @method Show\Field|Collection refereance_description(string $label = null)
     * @method Show\Field|Collection reference_url(string $label = null)
     * @method Show\Field|Collection referance_values(string $label = null)
     * @method Show\Field|Collection gender(string $label = null)
     * @method Show\Field|Collection age(string $label = null)
     * @method Show\Field|Collection ethnicities(string $label = null)
     * @method Show\Field|Collection interests(string $label = null)
     * @method Show\Field|Collection fullname(string $label = null)
     * @method Show\Field|Collection barcode(string $label = null)
     * @method Show\Field|Collection two_factor_secret(string $label = null)
     * @method Show\Field|Collection two_factor_recovery_codes(string $label = null)
     * @method Show\Field|Collection package_id(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
