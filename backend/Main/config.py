from pydantic_settings import BaseSettings, SettingsConfigDict
from dotenv import load_dotenv
load_dotenv()

class Settings(BaseSettings):
    DATABASE_URL: str
    APP_NAME: str
    APP_PORT: int
    SettingsConfigDict(env_file="../.env")



settings = Settings()