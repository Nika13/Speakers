<?
@section('content')
$hostname = "localhost"; // ��������/���� �������, � MySQL
$username = "root"; // ��� ������������ (� Denwer`� �� ��������� "root")
$password = ""; // ������ ������������ (� Denwer`� �� ��������� ������ �����������, ���� �������� ����� �������� ������)
$dbName = "socialka"; // �������� ���� ������

/* ������� ���������� */
mysql_connect($hostname, $username, $password) or die ("�� ���� ������� ����������");
mysql_query('SET NAMES utf8') or header('Location: Error');

/* �������� ���� ������. ���� ���������� ������ - ������� �� */
mysql_select_db($dbName) or die (mysql_error());
@endsection
?>