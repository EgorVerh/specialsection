<?php

use yii\db\Schema;
use yii\db\Migration;

class m240801_135617_fieldsforms extends Migration
{
    public function safeUp()
    {


        $this->createTable(
            '{{%fieldsforms}}',
            [
                'id' => $this->primaryKey(11),
                'nameform' => $this->text()->notNull(),
                'fieldform' => $this->text()->notNull(),
                'count_upload_doc' => $this->integer(10)->unsigned()->notNull()->defaultValue(0),
            ],
        );
        $this->batchInsert('{{%fieldsforms}}', ['nameform', 'fieldform'], [
            ['paid_edu', 'sample_contract_paid_educational'],
            ['paid_edu', 'document_on_approval_paid_educational'],
            ['paid_edu', 'document_on_how_to_provide_paid_educational'],
            ['paid_edu', 'document_on_the_fee_provide_paid_educational'],
            ['grants', 'order_of_the_educational_organization_establishment_of_scholarships'],
            ['grantsold', 'order_of_the_educational_organization_establishment_creation_scholarship_commission'],
            ['grantsold', 'regulations_scholarship_commission_educational_organization'],
            ['grantsold', 'regulations_scholarship_provision_and_other_forms_of_material_support'],
            ['grantsold', 'regulations_forms_material_support'],
            ['grants', 'link_information_formation_of_fee'],
            ['document', 'ustav'],
            ['document', 'copy_state_accreditation_certificate'],
            ['document', 'copy_local_normative_act_admission_of_students'],
            ['document', 'copy_local_normative_act_classes_of_students'],
            ['document', 'copy_local_normative_act_interim_progress_and_attestation_of_students'],
            ['document', 'copy_local_normative_act_expulsion_and_reinstatement_of_students'],
            ['document', 'copy_local_normative_act_minor_students'],
            ['document', 'copy_internal_regulations_of_students'],
            ['document', 'copy_internalwork_schedule'],
            ['document', 'copy_collective_agreement'],
            ['document', 'report_results_of_self-inspection'],
            ['document', 'prescriptions_of_bodies_field_of_education'],
            ['document', 'reports_execution_of_instructions_of_bodies_exercising_state_control'],
            ['common', 'information_on_the_founder(s)_of_the_educational_organisation'],
            ['common', 'licence_to_carry_out_educational_activities'],
            ['common', 'state_accreditation_of_educational_activities_under_implemented_educational_programmes'],
            ['edustandarts', 'federal_state_educational_standards'],
            ['edustandarts', 'educational_standards'],
            ['edustandarts', 'federal_government_requirements'],
            ['edustandarts', 'self_imposed_requirements'],
            ['inter', 'information_on_concluded_and_planned_agreements_with_foreign_and_or_international_organisations_on_education_and_science_issues'],
            ['grants', 'information_on_granting scholarships_to_students'],
            ['grants', 'information_on_social_support_measures_for_students'],
            ['grants', 'number_of_hostels'],
            ['grants', 'number_of_boarding_schools'],
            ['grants', 'number_of_places_in_hostels'],
            ['grants', 'number_of_dormitory_rooms_adapted_for_use_by_persons_with_disabilities_and_persons_with_special_needs'],
            ['grants', 'number_of_places_in_boarding_schools'],
            ['grants', 'number_of_residential_premises_in_boarding_schools_adapted_for_use_by_persons_with_disabilities_and_persons_with_special_needs'],
            ['budget', 'information_on_the_volume_of_educational_activities_the_financial_provision_of_which_is_carried_out_at_the_expense_of_budgetary_allocations_of_the_federal_budget'],
            ['budget', 'information_on_the_volume_of_educational_activities_the_financial_provision_of_which_is_carried_out_at_the_expense_of_the_budgets_of_constituent_entities_of_the_Russian_Federation'],
            ['budget', 'information_on_the_volume_of_educational_activities_the_financial_provision_of_which_is_carried_out_at_the_expense_of_local_budgets'],
            ['budget', 'information_on_the_volume_of_educational_activities_the_financial_provision_of_which_is_carried_out_under_agreements_on_the_provision_of_paid_educational_services'],
            ['budget', 'year_of_reporting'],
            ['budget', 'approved_plan_of_financial_and_economic_activity_of_the_educational_organisation_or_budget_estimates_of_the_educational_organisation'],
            ['budget', 'information_posted_on_http_bus_gov_ru'],
            ['budget', 'information_on_financial_and_material_income'],
            ['budget', 'information_on_expenditure_of_financial_and_material_resources'],
            ['objects', 'purposeLibr'],
            ['objects', 'purposeSport'],
            ['objects', 'name_of_the_object'],
            ['objects', 'address_of_the_object_location'],
            ['objects', 'area_of_the_facility'],
            ['objects', 'number_of_place'],
            ['objects', 'adaptability_for_use_by_disabled_persons_and_persons_with_disabilities'],
            ['objects', 'information_on_ensuring_unhindered_access_to_the_buildings_of_the_educational_organisation'],
            ['objects', 'information_about_the_means_of_education_and_training'],
            ['objects', 'information_on_adapted_means_of_education_and_upbringing'],
            ['objects', 'information_on_access_to_information_systems_and_information_and_telecommunication_networks'],
            ['objects', 'information_on_access_to_adapted_information_systems_and_information_and_telecommunications_networks'],
            ['objects', 'availability_of_an_electronic_information_and_education_environment_in_the_educational_organisation'],
            ['objects', 'number_of_own_electronic_educational_and_information_resources'],
            ['objects', 'number_of_third_party_electronic_educational_and_information_resources'],
            ['objects', 'number_of_electronic_catalogue_databases'],
            ['objects', 'reference_to_the_electronic_educational_resource_to_which_the_students_have_access'],
            ['objects', 'reference_to_the_adapted_electronic_educational_resource_to_which_access_is_provided'],
            ['objects', 'information_on_the_availability_of_special_technical_means_of_education_for_collective_and_individual_use'],
            ['objects', 'information_on_the_availability_of_conditions_for_unhindered_access_to_the_dormitory_boarding_school'],
            ['catering', 'information_on_the_conditions_of_nutrition_of_students'],
            ['catering', 'information_on_the_conditions_of_health_protection_of_students'],
            ['education', 'languages_in_which_education_(training)_is_provided'],
            ['education', 'information_on_the_number_of_students_under_educational_programmes_by_sources_of_funding'],
            ['education', 'information_on_the_results_of_admission'],
            ['education', 'information_on_the_results_of_transfer_reinstatement_and_expulsion_in_the_form_of_an_electronic_document_signed_with_a_simple_electronic_signature'],
            ['education', 'information_on_employment_of_graduates_for_each_educational_programme_in_which_graduation_took_place'],
            ['education', 'code'],
            ['education', 'name_of_profession,_speciality,_including_scientific_speciality,_training_direction'],
            ['education', 'educational_programme,_focus,_profile,_code_and_name_of_scientific_specialty'],
            ['education', 'number_of_graduates_of_the_previous_academic_year'],
            ['education', 'number_of_employed_graduates_of_the_previous_academic_year'],
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%fieldsforms}}');
    }
}
