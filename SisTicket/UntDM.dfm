object DM: TDM
  OldCreateOrder = False
  Height = 393
  Width = 545
  object FDConnection1: TFDConnection
    Params.Strings = (
      'User_Name=root'
      'Database=ticket'
      'DriverID=MySQL')
    LoginPrompt = False
    Left = 32
    Top = 8
  end
  object Trans: TFDTransaction
    Connection = FDConnection1
    Left = 98
    Top = 9
  end
  object FDGUIxWaitCursor1: TFDGUIxWaitCursor
    Provider = 'Forms'
    Left = 168
    Top = 8
  end
end
