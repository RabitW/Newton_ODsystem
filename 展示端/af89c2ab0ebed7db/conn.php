<?php
//���ݿ������ļ�
    @session_start();
	$host = 'localhost';//���ݿ������
	$user = 'root';//���ݿ��û���
	$password = 'root';//���ݿ�����
	$database = 'test';//���ݿ���
	$conn = mysqli_connect($host, $user, $password, $database) or die('���ݿ�����ʧ�ܣ�');
?>