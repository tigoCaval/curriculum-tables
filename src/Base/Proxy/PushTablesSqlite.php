<?php
namespace Tigo\Curriculum\Base\Proxy;

use Tigo\Curriculum\Base\Interfaces\IPush;
use Tigo\Curriculum\Base\Table\Sqlite\CreateUsersTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateCoursesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateGendersTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateContactsTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateAddressesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateDocumentsTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateLanguagesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateSummariesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateEducationsTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateObjectivesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateCourseTypesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateExperiencesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateCourseStatusesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateDriverLicensesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateSpeakLanguagesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateMaritalStatusesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateEducationCoursesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateReadingLanguagesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreateWritingLanguagesTable;
use Tigo\Curriculum\Base\Table\Sqlite\CreatePersonalInformationsTable;

/**
 * [class PushTablesSqlite]
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class PushTablesSqlite implements IPush
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