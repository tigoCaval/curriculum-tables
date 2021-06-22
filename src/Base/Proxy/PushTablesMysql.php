<?php
namespace Tigo\Curriculum\Base\Proxy;

use Tigo\Curriculum\Base\Interfaces\IPush;
use Tigo\Curriculum\Base\Table\Mysql\CreateUsersTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateCoursesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateGendersTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateContactsTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateAddressesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateDocumentsTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateLanguagesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateSummariesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateEducationsTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateObjectivesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateCourseTypesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateExperiencesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateCourseStatusesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateDriverLicensesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateSpeakLanguagesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateMaritalStatusesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateEducationCoursesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateReadingLanguagesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreateWritingLanguagesTable;
use Tigo\Curriculum\Base\Table\Mysql\CreatePersonalInformationsTable;

/**
 * [class PushTablesMysql]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class PushTablesMysql implements IPush
{

    public function create()
    {
        new CreateUsersTable(); 
        new CreateDriverLicensesTable();
        new CreateMaritalStatusesTable();
        new CreateGendersTable();
        new CreateEducationCoursesTable();
        new CreateCourseTypesTable();
        new CreateCourseStatusesTable();
        new CreateSpeakLanguagesTable();
        new CreateReadingLanguagesTable();
        new CreateWritingLanguagesTable();
        new CreateLanguagesTable();
        new CreateEducationsTable();
        new CreateCoursesTable();
        new CreateDocumentsTable();
        new CreateAddressesTable();
        new CreateContactsTable();
        new CreatePersonalInformationsTable();
        new CreateExperiencesTable();
        new CreateObjectivesTable();
        new CreateSummariesTable();
    }

}